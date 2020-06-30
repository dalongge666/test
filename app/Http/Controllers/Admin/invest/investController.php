<?php

namespace App\Http\Controllers\Admin\invest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class investController extends Controller
{
    public function list(){
        return view('admin\invest\list');
    }

    public function add(){
        return view('admin\invest\add');
    }
}
