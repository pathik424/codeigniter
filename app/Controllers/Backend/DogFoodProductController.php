<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Backend\DogFoodProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class DogFoodProductController extends BaseController
{
    public function create()
    {
        return view('Backend/dog_food_product');
    }

    public function store()
    {
        $model = new DogFoodProductModel();

        $img = $this->request->getFile('product_image');
        $imgName = $img->getRandomName();
        $img->move('uploads/', $imgName);

        $slug = url_title($this->request->getPost('product_name'), '-', true);

        $model->save([
            'user_id'            => session()->get('user_id'),
            'product_name'       => $this->request->getPost('product_name'),
            'product_price'      => $this->request->getPost('product_price'),
            'product_image'      => $imgName,
            'product_description'=> $this->request->getPost('product_description'),
            'product_stock'      => $this->request->getPost('product_stock'),
            'product_slug'       => $slug,
        ]);

        return redirect()->to('/dogfoodproduct/create')->with('message', 'Product added!');
    }
}
