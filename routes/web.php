<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTypeController;
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
    return view('Auth.login');
});
Route::get('/signup', function () {
    return view('Auth.signup');
});

Route::resource('usertype', UserTypeController::class);
Route::get('usertype/edit/{id}', [UserTypeController::class, 'edit']);
Route::post('usertype/update/{id}', [UserTypeController::class, 'update']);
Route::post('usertype/store', [UserTypeController::class, 'store']);
Route::get('usertype/destroy/{id}', [UserTypeController::class, 'destroy']);

Route::post('user/signupuser', [UserController::class, 'signupuser']);
Route::post('user/login', [UserController::class, 'login']);