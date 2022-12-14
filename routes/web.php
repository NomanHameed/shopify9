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

Route::get('/', [ProductController::class, 'landingPage'])->middleware(['verify.shopify'])->name('home');
Route::get('/add', [ProductController::class, 'addScript'])->middleware(['verify.shopify'])->name('add.script');
Route::get('/update', [ProductController::class, 'updateScript'])->middleware(['verify.shopify'])->name('update.script');
Route::get('/destroy', [ProductController::class, 'removeScript'])->middleware(['verify.shopify'])->name('remove.script');

Route::get('/login', function (){
    if (Auth::user()) {
        return redirect()->route('home');
    }
    return view('login');
});

Route::get('/test', function (){
    $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json');
    dd($res);
});
