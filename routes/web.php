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
Route::get('/reseps/create', function (){
    return view('resep.create-resep');
});

Route::get('/reseps/{id}', [ResepController::class, 'show']);

Route::get('profile/{user:username}', [ProfileController::class, 'show'])->name('profile');

Route::get('/admin', function () {
    return view('admin');
})->middleware('can:admin');


Route::get('/jasmine', function() {
    return view('resep.detail-resep');
});
