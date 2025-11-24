<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Backend\DogFoodProductModel;
<<<<<<< HEAD
use App\Models\Backend\HeaderModel;
=======
>>>>>>> 3a6179a23b281024741b27a42226f0c5599bac99
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function home_index()
    {
<<<<<<< HEAD
        $productModel = new DogFoodProductModel();
        $headerModel = new HeaderModel();
=======
        
  
        $productModel = new DogFoodProductModel();
>>>>>>> 3a6179a23b281024741b27a42226f0c5599bac99

        // Fetch only active products
        $data['products'] = $productModel
            ->where('product_is_active', 1)
            ->findAll();

<<<<<<< HEAD
        // Fetch active headers for navigation
        $data['headers'] = $headerModel
            ->where('is_active', 1)
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('Frontend/home', $data);
        //  return view('Frontend/home');
=======
        return view('Frontend/home', $data);
      //  return view('Frontend/home');
    
>>>>>>> 3a6179a23b281024741b27a42226f0c5599bac99
    }
}
