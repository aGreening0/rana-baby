<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabyController;
use App\Http\Controllers\InviteController;


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

Route::resource('babies', BabyController::class)->middleware('auth');

Route::resource('families', FamilyController::class)->middleware('auth');

Route::get('/invite', [InviteController::class, 'create'])->name('invite.create');
Route::get('/invite/send', [InviteController::class, 'send'])->name('invite.send');
Route::get('/invite/accept/{token}', [InviteController::class, 'accept'])->name('invite.accept');

require __DIR__.'/auth.php';
