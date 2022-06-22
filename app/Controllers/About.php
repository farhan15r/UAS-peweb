<?php

namespace App\Controllers;

use App\Models\DeveloperModel;

class About extends BaseController
{
    public function index()
    {
        $DevModel = new DeveloperModel();
        $developers = $DevModel->findAll();

        $data = [
            'developers' => $developers
        ];

        return view('about/index', $data);
    }
}
