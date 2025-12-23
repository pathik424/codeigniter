<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Backend\PostModel;
use App\Models\Backend\HeaderModel;

class PostController extends BaseController
{

        public function blog_view()
    {
        $model = new PostModel();
        $headerModel = new HeaderModel();
        $blog_view['headers'] = $headerModel->orderBy('id', 'ASC')->findAll();
        $blog_view['posts'] = $model->orderBy('post_id', 'DESC')->findAll();
        return view('Frontend/blog', $blog_view);
    }

    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->orderBy('post_id', 'DESC')->findAll();
        return view('Backend/posts_listing', $data);
    }

    public function create()
    {
        return view('Backend/add_new_post');
    }

    public function store()
    {
        $model = new PostModel();
        $title = trim($this->request->getPost('title'));
        $textarea = trim($this->request->getPost('textarea'));

        if ($title === '' || $textarea === '') {
            return redirect()->back()->withInput()->with('message', 'Title and Description are required');
        }

        $imageName = null;
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/posts', $imageName);
        }

        $model->save([
            'user_id'  => session()->get('user_id'),
            'title'    => $title,
            'textarea' => $textarea,
            'image'    => $imageName,
        ]);

        return redirect()->to('/posts_listing')->with('message', 'Post added successfully');
    }

    public function edit($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('Backend/edit_post', $data);
    }

    public function update($id)
    {
        $model = new PostModel();
        $title = trim($this->request->getPost('title'));
        $textarea = trim($this->request->getPost('textarea'));

        if ($title === '' || $textarea === '') {
            return redirect()->back()->withInput()->with('message', 'Title and Description are required');
        }

        $post = $model->find($id);
        $imageName = $post['image'];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Delete old image if exists
            if ($imageName && file_exists(FCPATH . 'uploads/posts/' . $imageName)) {
                unlink(FCPATH . 'uploads/posts/' . $imageName);
            }
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/posts', $imageName);
        }

        $model->update($id, [
            'title'    => $title,
            'textarea' => $textarea,
            'image'    => $imageName,
        ]);

        return redirect()->to('/posts_listing')->with('message', 'Post updated successfully');
    }

    public function delete($id)
    {
        $model = new PostModel();
        $post = $model->find($id);

        // Delete image file if exists
        if ($post && $post['image'] && file_exists(FCPATH . 'uploads/posts/' . $post['image'])) {
            unlink(FCPATH . 'uploads/posts/' . $post['image']);
        }

        $model->delete($id);
        return redirect()->to('/posts_listing')->with('message', 'Post deleted');
    }
}
