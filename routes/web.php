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

Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.admin');
    });
    Route::get('/admin/list-produk', function () {
        return view('admin.list');
    });
    Route::get('/admin/tambah', function () {
        return view('admin.tambah');
    });
    Route::get('/admin/edit', function () {
        return view('admin.edit');
    });
    Route::get('/admin/slide', function () {
        return view('admin.banner');
    });
    Route::get('/admin/reset', function () {
        return view('admin.resetpass');
    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
