<?php

namespace App\Http\Controllers\Admin\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function rbac(){
        return view('admin\admin\RBAC');
    }

    public function list(){
        return view('admin\admin\list');
    }
}
