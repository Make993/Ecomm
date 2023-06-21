<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AuthController;

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

Route::get('/home', [IndexController::class, "index"]);
Route::POST('/checkout', [CheckoutController::class, "checkout"]);
Route::get('/checkout', [CheckoutController::class, "checkout"]);
Route::get('/contact', [contactController::class, "contact"]);

Route::get('signin', [AuthController::class, 'signin'])->name('signin');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('signin.custom'); 
Route::get('signup', [AuthController::class, 'signup'])->name('signup');
Route::post('custom-signup', [AuthController::class, 'customsignup'])->name('signup.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


