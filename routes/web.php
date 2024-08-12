<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\CmsController;

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

// main promo routes
Route::get('/', function () {
    return redirect()->route('promo.index');
});

Route::get('/contact', [PromoController::class, 'contact']);
Route::get('/mechanics', [PromoController::class, 'mechanics']);
Route::resource('promo', PromoController::class);

// cms routes
Route::get('/cms/dashboard', [CmsController::class, 'dashboard'])->middleware(['auth']);
Route::get('/cms/entries', [CmsController::class, 'entries'])->middleware(['auth']);
Route::get('/cms/draw', [CmsController::class, 'draw'])->middleware(['auth']);

require __DIR__.'/auth.php';

Route::resource('cms', CmsController::class);
