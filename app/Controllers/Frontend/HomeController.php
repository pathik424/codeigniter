<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Backend\DogFoodProductModel;
use App\Models\Backend\HeaderModel;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function home_index()
    {
        $productModel = new DogFoodProductModel();
        $headerModel = new HeaderModel();

        // Fetch only active products
        $data['products'] = $productModel
            ->where('product_is_active', 1)
            ->findAll();

        // Fetch active headers for navigation
        $data['headers'] = $headerModel
            ->where('is_active', 1)
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('Frontend/home', $data);
        //  return view('Frontend/home');
    }
}
