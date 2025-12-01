<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Backend\GalleryModel;

class GalleryController extends BaseController
{
    public function index()
    {
        $model = new GalleryModel();
        $data['gallery'] = $model->orderBy('gallery_id', 'DESC')->findAll();
        return view('Backend/gallery_listing', $data);
    }

    public function create()
    {
        return view('Backend/add_gallery');
    }

    public function store()
    {
        $model = new GalleryModel();

        $imageName = null;
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/gallery', $imageName);
        }

        if (!$imageName) {
            return redirect()->back()->withInput()->with('error', 'Please upload an image');
        }

        $model->save([
            'image'       => $imageName,
            'animal_type' => $this->request->getPost('animal_type'),
            'breed_name'  => $this->request->getPost('breed_name'),
        ]);

        return redirect()->to('/gallery_listing')->with('message', 'Gallery image added successfully');
    }

    public function edit($id)
    {
        $model = new GalleryModel();
        $data['gallery'] = $model->find($id);
        return view('Backend/edit_gallery', $data);
    }

    public function update($id)
    {
        $model = new GalleryModel();
        $gallery = $model->find($id);
        $imageName = $gallery['image'];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Delete old image
            if ($imageName && file_exists(FCPATH . 'uploads/gallery/' . $imageName)) {
                unlink(FCPATH . 'uploads/gallery/' . $imageName);
            }
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/gallery', $imageName);
        }

        $model->update($id, [
            'image'       => $imageName,
            'animal_type' => $this->request->getPost('animal_type'),
            'breed_name'  => $this->request->getPost('breed_name'),
        ]);

        return redirect()->to('/gallery_listing')->with('message', 'Gallery image updated successfully');
    }

    public function delete($id)
    {
        $model = new GalleryModel();
        $gallery = $model->find($id);

        if ($gallery && $gallery['image'] && file_exists(FCPATH . 'uploads/gallery/' . $gallery['image'])) {
            unlink(FCPATH . 'uploads/gallery/' . $gallery['image']);
        }

        $model->delete($id);
        return redirect()->to('/gallery_listing')->with('message', 'Gallery image deleted');
    }
}

