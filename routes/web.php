<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResepController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/reseps/list', [ResepController::class, 'index']);
Route::get('/search', [ResepController::class, 'search']);
Route::get('/reseps/create', [ResepController::class, 'create'])->middleware('auth')->name('resep.create');
Route::post('/reseps/store', [ResepController::class, 'store'])->middleware('auth')->name('resep.store');
Route::post('/reseps/delete/{id}', [ResepController::class, 'destroy'])->middleware('auth')->name('resep.delete');

Route::get('/reseps/{id}', [ResepController::class, 'show']);

Route::get('profile/{user:username}', [ProfileController::class, 'show'])->name('profile');

Route::get('/notifications', function () {
    return view('member.notification');
})->middleware('auth');

Route::get('/admin', function () {
    return view('admin');
})->middleware('can:admin');
