<?php

use App\Http\Controllers\ProductController;
use App\Http\Livewire\Products;
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

Route::get('/products', ProductController::class . "@show")->name('show');
Route::get('/products/table', Products::class)->name('table');
