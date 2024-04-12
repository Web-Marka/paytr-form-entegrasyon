<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaytrController;

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
//     return view('welcome');
// });

// PAYTR
Route::get('/odeme/index', [PaytrController::class, 'OdemeIndex'])->name('odeme.index');
Route::post('/odeme/sonuc', [PaytrController::class, 'OdemeSonuc'])->name('odeme.sonuc');

Route::get('/odeme/basarili', [PaytrController::class, 'OkUrl'])->name('odeme.basarili');
Route::get('/odeme/hata', [PaytrController::class, 'FailUrl'])->name('odeme.hata');
