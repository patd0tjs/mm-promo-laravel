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
Route::resource('promo', PromoController::class);

// cms routes
Route::get('/cms/entries', [CmsController::class, 'entries']);
Route::get('/cms/dashboard', [CmsController::class, 'dashboard']);
Route::resource('cms', CmsController::class);
