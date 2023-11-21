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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->middleware('auth')->name('main.index');
Route::get('/destinations', [\App\Http\Controllers\DestinationController::class, 'index'])->name('destination.index');
Route::get('/contacts', [\App\Http\Controllers\MainController::class, 'contacts'])->name('contacts.index');
Route::get('/help', [\App\Http\Controllers\MainController::class, 'help'])->name('help.index');
Route::get('/rules', [\App\Http\Controllers\MainController::class, 'rules'])->name('rules.index');
Route::get('/warning', [\App\Http\Controllers\MainController::class, 'warning'])->name('warning.index');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->middleware('guest');
