<?php

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
    return view('beranda');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail', function () {
    return view('detail');
});



Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/keranjang', function () {
        if (Auth::user()->role == 'guest') {
            return app('App\Http\Auth\RegisterController')->showSettings();
        } else {
            return view('keranjang');
        }
    })->name('Keranjang');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', function () {
        if (Auth::user()->role == 'guest') {
            return app('App\Http\Auth\RegisterController')->showSettings();
        } else {
            return view('checkout');
        }
    })->name('checkout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/selesai', function () {
        if (Auth::user()->role == 'guest') {
            return app('App\Http\Auth\RegisterController')->showSettings();
        } else {
            return view('selesai');
        }
    })->name('selesai');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/status', function () {
        if (Auth::user()->role == 'guest') {
            return app('App\Http\Auth\RegisterController')->showSettings();
        } else {
            return view('status');
        }
    })->name('status');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
