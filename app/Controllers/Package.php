<?php

namespace App\Controllers;

use App\Models\PackageModel;

class Package extends BaseController
{
    public function index()
    {
        $PackageModel = new PackageModel();
        $packages = $PackageModel->findAll();

        $data = [
            'packages' => $packages
        ];

        return view('packages/index', $data);
    }

    public function packages()
    {
        $PackageModel = new PackageModel();
        $packages = $PackageModel->findAll();

        $data = [
            'packages' => $packages,
        ];

        return view('admin/packages', $data);
    }

    public function add()
    {
        return view('admin/addPackage');
    }

    public function store()
    {
        $PackageMode = new PackageModel();
        $PackageMode->save([
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'price' => (int)$this->request->getVar('price'),
        ]);

        return redirect()->to('/admin/packages');
    }

    public function package($id)
    {
        $PackageModel = new PackageModel();
        $package = $PackageModel->where('id', $id)->first();

        $data = [
            'package' => $package,
        ];

        return (view('/admin/package', $data));
    }

    public function update($id)
    {
        $PackageModel = new PackageModel();
        $PackageModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'price' => (int)$this->request->getVar('price'),
        ]);

        return redirect()->to('/admin/packages');
    }

    public function delete($id)
    {
        $PackageModel = new PackageModel();
        $PackageModel->delete($id);
        
        return redirect()->to('/admin/packages');
    }
}
