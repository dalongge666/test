<?php

    Route::any('bg','Admin\indexController@bg') -> name('bg');//后台首页
    Route::any('welcome','Admin\indexController@welcome') -> name('bg.welcome');//我的桌面

//管理员管理
    Route::any('rbac','Admin\admin\adminController@rbac') -> name('bg.admin.rbac');//rbac管理
    Route::any('adminlist','Admin\admin\adminController@list') -> name('bg.admin.list');//管理员列表

//标签管理
    Route::any('label','Admin\label\labelController@list') -> name('bg.label.list');//标签管理
    Route::any('add','Admin\label\labelController@add') -> name('bg.label.add');//添加标签

//财务管理
    Route::any('finance','Admin\finance\financeController@list') -> name('bg.finance.list');//财务列表
    Route::any('fadd','Admin\finance\financeController@add') -> name('bg.finance.add');//添加

//充值管理
    Route::any('pay','Admin\pay\payController@list') -> name('bg.pay.list');//充值列表
    Route::any('payadd','Admin\pay\payController@add') -> name('bg.pay.add');//添加

//充值管理
Route::any('invest','Admin\invest\investController@list') -> name('bg.invest.list');//垫付列表
Route::any('investadd','Admin\invest\investController@add') -> name('bg.invest.add');//申请垫付
