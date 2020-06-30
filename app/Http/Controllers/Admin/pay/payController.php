<?php

namespace App\Http\Controllers\Admin\pay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class payController extends Controller
{
    public function list(){
        return view('admin\pay\list');
    }

    public function add(){
        return view('admin\pay\add');
    }
}
