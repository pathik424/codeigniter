<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Backend\HeaderModel;

class HeaderController extends BaseController
{
    public function index()
    {
        $model = new HeaderModel();
        $data['headers'] = $model->orderBy('id', 'DESC')->findAll();
        return view('Backend/headers_listing', $data);
    }

    // public function test()
    // {
    //     return view('Backend/headers_listing');
    // }

    public function create()
    {
        return view('Backend/add_new_header');
    }

    public function store()
    {
        $model = new HeaderModel();
        $title = trim($this->request->getPost('header_title'));
        $urlInput = trim($this->request->getPost('header_url'));
        $isActive = $this->request->getPost('is_active') ? 1 : 0;

        // Basic validation
        if ($title === '' || $urlInput === '') {
            return redirect()->back()->withInput()->with('message', 'Title and URL are required');
        }

        // Store relative path for internal links to allow base_url automatic updates at render time
        $url = preg_match('/^(?:https?:|ftp:)/i', $urlInput)
            ? $urlInput
            : '/' . ltrim($urlInput, '/');

        $model->save([
            'header_title' => $title,
            'header_url'   => $url,
            'is_active'    => $isActive,
        ]);

        return redirect()->to('/headers_listing')->with('message', 'Header added successfully');
    }

    public function edit($id)
    {
        $model = new HeaderModel();
        $data['header'] = $model->find($id);
        return view('Backend/edit_header', $data);
    }

    public function update($id)
    {
        $model = new HeaderModel();
        $title = trim($this->request->getPost('header_title'));
        $urlInput = trim($this->request->getPost('header_url'));
        $isActive = $this->request->getPost('is_active') ? 1 : 0;

        // Basic validation
        if ($title === '' || $urlInput === '') {
            return redirect()->back()->withInput()->with('message', 'Title and URL are required');
        }

        // Store relative path for internal links to allow base_url automatic updates at render time
        $url = preg_match('/^(?:https?:|ftp:)/i', $urlInput)
            ? $urlInput
            : '/' . ltrim($urlInput, '/');

        $model->update($id, [
            'header_title' => $title,
            'header_url'   => $url,
            'is_active'    => $isActive,
        ]);

        return redirect()->to('/headers_listing')->with('message', 'Header updated successfully');
    }

    public function toggle($id)
    {
        $model = new HeaderModel();
        $header = $model->find($id);

        if ($header) {
            $model->update($id, [
                'is_active' => $header['is_active'] ? 0 : 1,
            ]);
        }

        return redirect()->to('/headers_listing');
    }

    public function delete($id)
    {
        $model = new HeaderModel();
        $model->delete($id);
        return redirect()->to('/headers_listing')->with('message', 'Header deleted');
    }
}