<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MilkController;


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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::resource('babies', BabyController::class)->middleware('auth');
Route::resource('milks', MilkController::class)->middleware('auth');


require __DIR__.'/auth.php';
