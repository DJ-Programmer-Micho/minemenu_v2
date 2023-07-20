<?php

use App\Http\Middleware\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/met', function(){
    return view('dashboard.met.met');
})->name('superadmin')->middleware('superadmin');

Route::get('/admin', function(){
    return view('dashboard.admin.admin');
})->name('admin')->middleware('admin');

Route::get('/rest', function(){
    return view('dashboard.rest.pages.dashboard');
})->name('rest')->middleware('rest');

Route::get('/emp', function(){
    return view('dashboard.emp.emp');
})->name('emp')->middleware('emp');
