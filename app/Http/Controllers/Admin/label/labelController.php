<?php

namespace App\Http\Controllers\Admin\label;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class labelController extends Controller
{
    public function list(){
        return view('admin\label\list');
    }

    public function add(){
        return view('admin\label\add');
    }
}
