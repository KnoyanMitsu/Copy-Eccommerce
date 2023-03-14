<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListProduct;
use App\Http\Controllers\Halaman;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartViewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\ComentarController;
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


Route::get('/', [Halaman::class, 'index']);
Route::get('/home', [Halaman::class, 'index']);

Route::get('/cari', [SearchController::class, 'index'])->name('product.search');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail/{id}', [DetailController::class,'index'])->name('product.detail');



Auth::routes();




// Route::middleware(['auth'])->group(function () {
//     Route::get('/checkout', function () {
//         if (Auth::user()->role == 'guest') {
//             return app('App\Http\Auth\RegisterController')->showSettings();
//         } else {
//             return view('checkout');
//         }
//     })->name('checkout');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/selesai', function () {
        if (Auth::user()->role == 'guest') {
            return app('App\Http\Auth\RegisterController')->showSettings();
        } else {
            return view('selesai');
        }
    })->name('selesai');
});



Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin/tambah', [ListProduct::class, 'create']);
    Route::get('/admin/edit/{id}', [ListProduct::class, 'edit'])->name('edit');
    Route::post('create_product', [ListProduct::class, 'store'])->name('create_product');
    Route::put('update_product/{id}', [ListProduct::class, 'update'])->name('update_product');
    Route::delete('/admin/hapusproduct/{id}', [ListProduct::class, 'delete'])->name('Bye');
    Route::get('/admin/tambah', [ListProduct::class, 'create']);
    Route::get('/admin/list-produk', [ListProduct::class, 'index'])->name('list_product');
    Route::get('/admin/list-pengiriman', [PengirimanController::class, 'index'])->name('list_pengiriman.index');
    Route::get('/admin/reset', function () {
        return view('admin.resetpass');
    });
    Route::get('/admin', function () {
        return view('admin.admin');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::post('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart',[CartViewController::class, 'index'])->name('cart.index');
    Route::delete('/cart/delete', [CartViewController::class, 'delete'])->name('cart.delete');
    Route::put('/cart/update/{id}', [CartViewController::class, 'update'])->name('cart.update');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/update/alamat', [AlamatController::class, 'index'])->name('alamat.index');
    Route::post('/update/alamat', [AlamatController::class, 'store'])->name('alamat.store');
    Route::post('/checkout/selesai', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('/comment/{product}', [ComentarController::class, 'store'])->name('commentar.create');
    Route::get('/status', [StatusController::class, 'index'])->name('status.index');

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
