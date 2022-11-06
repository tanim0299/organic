<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\MainMenuController;

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

Route::get('/',[FrontendController::class,'index']);
Route::get('/products',[FrontendController::class,'products']);
Route::get('/cart',[FrontendController::class,'cart']);
Route::get('/checkout',[FrontendController::class,'checkout']);
Route::get('/confirm_order',[FrontendController::class,'confirm_order']);
Route::get('/product_single',[FrontendController::class,'product_single']);

Auth::routes();

Route::get('/dashboard', [BackendController::class, 'index'])->name('home');

Route::resources([
    'main_menu'=>MainMenuController::class,
]);
