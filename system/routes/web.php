<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AuthController;
use App\http\Controllers\ProdukController;
use App\http\Controllers\UserController;
use App\http\Controllers\SettingController;
use App\http\Controllers\ClientController;

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

Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('client', [ClientController::class, 'client']);

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);


Route::get('test/{produk}', [HomeController::class, 'test']);
Route::get('client', [HomeController::class, 'showhome']);


Route::prefix('admin')->middleware('auth')->group(function(){
	Route::post('produk/filter', [ProdukController::class, 'filter']);
	Route::get('beranda', [HomeController::class, 'showberanda']);
	Route::get('beranda/{status}', [HomeController::class, 'showberanda']);
	Route::resource('produk', ProdukController::class);
	Route::resource('user', UserController::class);



});


// client

Route::get('index', [ClientController::class, 'index']);
Route::get('base', [ClientController::class, 'base']);
Route::get('beli', [ClientController::class, 'beli']);
Route::get('detail', [ClientController::class, 'detail']);
Route::get('home', [ClientController::class, 'home']);

