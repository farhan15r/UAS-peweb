<?php

namespace App\Controllers;

use App\Models\PackageModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $PackageModel = new PackageModel();
        $packages = $PackageModel->findAll();

        $UserModel = new UserModel();
        $users = $UserModel->asArray()->where('isinfluencer', '1')->findAll();

        $data = [
            'packages' => $packages,
            'users' => $users,
        ];

        return view('index', $data);
    }
}
