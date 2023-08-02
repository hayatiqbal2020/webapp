<?php

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
    return view('welcome');
});

Route::resource('usertype', UserTypeController::class);
// Custom route for the "edit" action
Route::get('usertype/edit/{id}', [UserTypeController::class, 'edit']);
Route::post('usertype/update/{id}', [UserTypeController::class, 'update']);
Route::post('usertype/store', [UserTypeController::class, 'store']);
Route::get('usertype/destroy/{id}', [UserTypeController::class, 'destroy']);