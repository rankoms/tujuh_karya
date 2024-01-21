<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/crew', [HomeController::class, 'crew'])->name('crew');
Route::get('/volunteer', [HomeController::class, 'volunteer'])->name('volunteer');
Route::get('/galery', [HomeController::class, 'galery'])->name('galery');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/crew/store', [CrewController::class, 'store'])->name('crew.store');
Route::post('/volunteer/store', [CrewController::class, 'store_cv'])->name('crew.volunteer.store');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
