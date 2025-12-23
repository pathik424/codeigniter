<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Backend\PackageModel;
use CodeIgniter\HTTP\ResponseInterface;

class PackageController extends BaseController
{
    protected $packageModel;

    public function __construct()
    {
        $this->packageModel = new PackageModel();
    }

    /**
     * Display all packages
     */
    public function index()
    {
        $data['packages'] = $this->packageModel->findAll();
        return view('Backend/package/package_listing', $data);
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('Backend/package/package_form');
    }

    /**
     * Store new package
     */
    public function store()
    {
        // Validate CSRF
        if (!$this->validate([
            'package_name'  => 'required|min_length[3]|max_length[255]',
            'package_price' => 'required|numeric|greater_than[0]',
        ])) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $packageName = $this->request->getPost('package_name');
        $packagePrice = $this->request->getPost('package_price');
        $services = $this->request->getPost('package_services');

        // Handle image upload
        $imageName = null;
        $image = $this->request->getFile('package_image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/packages', $imageName);
        }

        // Ensure services is an array and filter empty values
        if (is_array($services)) {
            $services = array_filter($services, function($service) {
                return !empty(trim($service));
            });
        } else {
            $services = [];
        }

        // Save to database
        $data = [
            'package_name'      => $packageName,
            'package_price'     => $packagePrice,
            'package_services'  => json_encode($services),
        ];

        if ($imageName) {
            $data['package_image'] = $imageName;
        }

        if ($this->packageModel->insert($data)) {
            return redirect()->to('/packages_listing')->with('message', 'Package created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to create package');
        }
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $package = $this->packageModel->find($id);
        if (!$package) {
            return redirect()->to('/packages_listing')->with('error', 'Package not found');
        }

        // Decode services from JSON
        if (is_string($package['package_services'])) {
            $package['package_services'] = json_decode($package['package_services'], true) ?? [];
        }

        $data['package'] = $package;
        return view('Backend/package/package_form', $data);
    }

    /**
     * Update package
     */
    public function update($id)
    {
        $package = $this->packageModel->find($id);
        if (!$package) {
            return redirect()->to('/packages_listing')->with('error', 'Package not found');
        }

        // Validate CSRF
        if (!$this->validate([
            'package_name'  => 'required|min_length[3]|max_length[255]',
            'package_price' => 'required|numeric|greater_than[0]',
        ])) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $packageName = $this->request->getPost('package_name');
        $packagePrice = $this->request->getPost('package_price');
        $services = $this->request->getPost('package_services');

        // Handle image upload
        $imageName = $package['package_image'];
        $image = $this->request->getFile('package_image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Delete old image
            if ($imageName && file_exists(FCPATH . 'uploads/packages/' . $imageName)) {
                unlink(FCPATH . 'uploads/packages/' . $imageName);
            }
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/packages', $imageName);
        }

        // Ensure services is an array and filter empty values
        if (is_array($services)) {
            $services = array_filter($services, function($service) {
                return !empty(trim($service));
            });
        } else {
            $services = [];
        }

        // Update database
        $data = [
            'package_name'      => $packageName,
            'package_price'     => $packagePrice,
            'package_services'  => json_encode($services),
        ];

        if ($imageName) {
            $data['package_image'] = $imageName;
        }

        if ($this->packageModel->update($id, $data)) {
            return redirect()->to('/packages_listing')->with('message', 'Package updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update package');
        }
    }

    /**
     * Delete package
     */
    public function delete($id)
    {
        $package = $this->packageModel->find($id);
        if (!$package) {
            return redirect()->to('/packages_listing')->with('error', 'Package not found');
        }

        // Delete image if exists
        if ($package['package_image'] && file_exists(FCPATH . 'uploads/packages/' . $package['package_image'])) {
            unlink(FCPATH . 'uploads/packages/' . $package['package_image']);
        }

        if ($this->packageModel->delete($id)) {
            return redirect()->to('/packages_listing')->with('message', 'Package deleted successfully');
        } else {
            return redirect()->to('/packages_listing')->with('error', 'Failed to delete package');
        }
    }
}
