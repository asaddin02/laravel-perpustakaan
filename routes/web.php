<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('home');
});

Route::get('template', function () {
    return view('template');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/app-profile', function () {
    return view('app-profile');
});

Route::get('/form',[FormController::class,'index']);
Route::get('/create',[FormController::class,'create']);
Route::post('/store',[FormController::class,'store']);
Route::get('/edit/{id}',[FormController::class,'edit']);
Route::put('/edit/{id}',[FormController::class,'update']);
Route::delete('/form/{id}',[FormController::class,'destroy']);
