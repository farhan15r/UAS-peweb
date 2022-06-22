<?php

namespace App\Controllers;

use App\Models\PackageModel;

class Packages extends BaseController
{
    public function index()
    {
        return view('packages/index');
    }
}
