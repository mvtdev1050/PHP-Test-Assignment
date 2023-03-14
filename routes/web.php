<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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
    return view('user.login');
})->name('home');

Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::middleware([IsUserLoggedIn::class])->group(function () {
    # view profile
    Route::get('profile', [AuthController::class, 'userProfile'])->name('user.profile');

    # logout
    Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');

    # author resource
    Route::resource('author', AuthorController::class)->only(['index', 'show', 'destroy']);

    # book resource
    Route::resource('book', BookController::class)->only(['index', 'create', 'store', 'destroy']);
});
