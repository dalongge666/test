<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function bg(){
        return view('admin/index');
    }

    public function welcome(){

        return view('admin/welcome');
    }
}
