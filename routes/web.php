<?php

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
})->name('root');

Route::prefix('pelanggan')
->name('pelanggan.')
->group(function(){
    Route::view('/login', 'auth.pelanggan.login')->name('login');
    Route::view('/register', 'auth.pelanggan.register')->name('register');
});

Route::prefix('tukang-bersih')
->name('tukang-bersih.')
->group(function(){
    Route::view('/login', 'auth.tukang-bersih.login')->name('login');
    Route::view('/register', 'auth.tukang-bersih.register')->name('register');
});
