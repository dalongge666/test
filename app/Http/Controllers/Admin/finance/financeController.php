<?php

namespace App\Http\Controllers\Admin\finance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class financeController extends Controller
{
    public function list(){
        return view('admin\finance\list');
    }

    public function add(){
        return view('admin\finance\add');
    }
}
