<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'productList'])->middleware(['verify.shopify'])->name('home');
//Route::get('/', function (){
//    return view('welcome');
//})->middleware(['verify.shopify'])->name('home');

Route::get('/login', function (){
    return view('login');
});

Route::get('/test', function (){
    $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json');
    dd($res);
});
