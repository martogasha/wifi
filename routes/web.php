<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('profile', [IndexController::class, 'profile']);


//Admin controllers
Route::get('admin', [AdminController::class, 'index']);
Route::get('users', [AdminController::class, 'users']);
Route::get('expense', [AdminController::class, 'expense']);
Route::get('invoice', [AdminController::class, 'invoice']);
Route::get('payOne', [AdminController::class, 'payOne']);
Route::get('confirm', [AdminController::class, 'confirm']);
Route::get('mpesaTest', [AdminController::class, 'mpesaTest']);


Auth::routes();
Route::get('Register', [AuthController::class, 'Register']);
Route::post('Login', [AuthController::class, 'Login']);
Route::post('editUser', [AuthController::class, 'editUser']);
Route::post('storeWebhooks', [AdminController::class, 'storeWebhooks']);

Route::get('/home', 'HomeController@index')->name('home');
