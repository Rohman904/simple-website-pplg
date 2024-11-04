<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin',function(){
    return view(view: 'admin.dashboard');
})->middleware(middleware: 'auth');

Route::get('admin/categories',function(){
    return view(view: 'admin.categories.index');
})->middleware(middleware: 'auth');

Route::post('admin/category',[App\Http\Controllers\CategoryController::class,'create']);

Route::get('login', function(){
     return view(view: 'admin.login');
})->name(name: 'login');
