<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Backend\DogFoodProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function dashboard_index()
    {
        return view('Backend/admin_dashboard');
    }

    public function index()
    {
        $model = new DogFoodProductModel();
        $data['products'] = $model->findAll();
        return view('Backend/admin_dashboard', $data);
    }

    public function toggle($id)
    {
        $model = new DogFoodProductModel();
        $product = $model->find($id);

        if ($product) {
            $model->update($id, [
                'product_is_active' => $product['product_is_active'] ? 0 : 1
            ]);
        }

        return redirect()->to(base_url('admin_dashboard'));
    }

    public function delete($id)
    {
        $model = new DogFoodProductModel();
        $model->delete($id);
        return redirect()->to(base_url('admin_dashboard'));
    }
}
