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
}
