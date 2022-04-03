<?php

use App\Http\Controllers\StorageController;
use App\Http\Controllers\UserController;
use Domain\Users\Users\Actions\StoreUserAction;
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

Route::get('/storage', StorageController::class . "@show")->name('show');
