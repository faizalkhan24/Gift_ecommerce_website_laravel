<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('index');
// });

// routes/web.php

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('/why', [WhyController::class, 'index'])->name('why');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
