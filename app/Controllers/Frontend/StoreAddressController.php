<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Backend\StoreAddress;
use CodeIgniter\HTTP\ResponseInterface;

class StoreAddressController extends BaseController
{
    public function new_address()
    {
        return view('Backend/store_address/add_new_address');
    }

    //     public function new_address_store()
    // {
    //      $id = 1; // Static row ID
    //     $model = new StoreAddress();

    //     $model->save([
    //         'id_form'      => $id,
    //         'address'       => $this->request->getPost('address'),
    //         'phone'      => $this->request->getPost('phone'),
    //         'email'=> $this->request->getPost('email'),
    //         'website'      => $this->request->getPost('website'),
           
    //     ]);

    public function new_address_store()
{
    $model = new StoreAddress();

    // Check if static row (first row) exists
    $existing = $model->first();  // fetch only 1 row

    // Prepare data
    $data = [
        'address' => $this->request->getPost('address'),
        'phone'   => $this->request->getPost('phone'),
        'email'   => $this->request->getPost('email'),
        'website' => $this->request->getPost('website'),
    ];

    if ($existing) {
        // Update the existing static row
        $model->update($existing['id_form'], $data);

    } else {
        // Insert only once
        $model->insert($data);
    }
      return redirect()->to('/list_contact_us_forms')->with('message', 'Address added!');
    }
}
