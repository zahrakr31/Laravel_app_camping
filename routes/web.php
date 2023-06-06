<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

route::get('/', [HomeController::class, 'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/view_category', [AdminController::class, 'view_category']);
route::post('/add_category', [AdminController::class, 'add_category']);
route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::post('/add_offer', [AdminController::class, 'add_offer']);
route::get('/view_offer', [AdminController::class, 'view_offer']);
route::get('/show_offer', [AdminController::class, 'show_offer']);
route::get('/delete_offer/{id}', [AdminController::class, 'delete_offer']);
route::get('/update_offer/{id}', [AdminController::class, 'update_offer']);
route::POST('/update_offer_confirm/{id}', [AdminController::class, 'update_offer_confirm']);
route::get('/offer_detail/{id}', [HomeController::class, 'offer_detail']);
route::POST('/add_wishlist/{id}', [HomeController::class, 'add_wishlist']);
route::get('/show_wishlist', [HomeController::class, 'show_wishlist']);

route::get('/remove_wishlist/{id}', [HomeController::class, 'remove_wishlist']);
route::get('/cash_book', [HomeController::class, 'cash_book']);
route::get('/contact', [HomeController::class, 'contact']);
route::post('/send_message',[HomeController::class, 'send_message']);
route::get('/about', [HomeController::class, 'about']);
route::get('/testimonial', [HomeController::class, 'testimonial']);
route::get('/show_orders', [AdminController::class, 'show_orders']);
});
