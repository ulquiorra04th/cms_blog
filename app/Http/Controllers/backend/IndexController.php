<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;

class IndexController extends AdminController
{
    //
    public function __construct()
    {
        parent::__construct();
    }
    public function show(){

        return view('backend.index');
    }
}
