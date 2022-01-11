<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', HomeComponent::class)->name('home');

    Route::get('/reset-password', HomeComponent::class)->name('reset-password');
    Route::get('/profile', HomeComponent::class)->name('profile');

    Route::get('setLocale/{locale}', function ($locale) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    })->name('locale');

    Route::post('sidebarToggle', function () {
        //if no session then save as collapsed
        if (session()->has('sidebarState')) {
            session()->forget('sidebarState');;
        } else {
            //colapse sidebar
            session()->put('sidebarState', 'sidebar-collapse');
        }
    })->name('sidebarToggle');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
