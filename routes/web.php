<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsController;
use App\Http\Controllers\PasienController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

    Route::get('/rs', [RsController::class, 'index'])->middleware(['auth']);
    Route::get('/api/rs/getdata', [RsController::class, 'getdata'])->middleware(['auth']);
    Route::get('/rs/detail/{id}', [RsController::class, 'show'])->middleware(['auth']);
    Route::get('/rs/edit/{id}', [RsController::class, 'show'])->middleware(['auth']);
    Route::post('/rs/store', [RsController::class, 'store'])->middleware(['auth']);
    Route::post('/rs/delete/{id}', [RsController::class, 'destroy'])->middleware(['auth']);
    Route::post('/rs/update/{id}', [RsController::class, 'update'])->middleware(['auth']);

    ///Pasien
    Route::get('/pasien', [PasienController::class, 'index'])->middleware(['auth']);
    Route::get('/api/pasien/getdata', [PasienController::class, 'getdata'])->middleware(['auth']);
    Route::get('/pasien/detail/{id}', [PasienController::class, 'show'])->middleware(['auth']);
    Route::get('/pasien/edit/{id}', [PasienController::class, 'show'])->middleware(['auth']);
    Route::post('/pasien/store', [PasienController::class, 'store'])->middleware(['auth']);
    Route::post('/pasien/delete/{id}', [PasienController::class, 'destroy'])->middleware(['auth']);
    Route::post('/pasien/update/{id}', [PasienController::class, 'update'])->middleware(['auth']);


require __DIR__.'/auth.php';
