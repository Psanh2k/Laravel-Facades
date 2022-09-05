<?php

use App\Service\DienTich\DienTich;
use Illuminate\Support\Facades\Route;
use App\Service\DienTich\DienTichFacade;
use App\Facade;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/c', function () {
   
});
Route::get('/b', function (DienTich $dienTich) {
    dd(
        $dienTich->DienTich(3)
    );
    return view('welcome');
});
Route::get('/a', function () {
    return view('home');
});
Route::get('/ab', function () {
    return DienTichFacade::DienTich(3);
});
