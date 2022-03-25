<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/Nguyen', function (){
    return 'Vi Thành Nguyên K20 IT 02';
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/trangchu', function () {
    return view('blog');
});

Route::get('admin', function () {
    return '1';
})->middleware('tess');
