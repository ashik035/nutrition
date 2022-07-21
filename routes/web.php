<?php

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
//     return view('frontend.home');
// });
Route::get('/', [App\Http\Controllers\FrontendController::class, 'frontend_home']);

Auth::routes();
Route::group(['middleware' => ['auth']], function() {

    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/about', [App\Http\Controllers\HomeController::class, 'about'])->name('admin.about');
    Route::get('/admin/address', [App\Http\Controllers\HomeController::class, 'address'])->name('admin.address');
    Route::get('/admin/banner', [App\Http\Controllers\HomeController::class, 'banner'])->name('admin.banner');
    Route::get('/admin/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('admin.menu');
    Route::get('/admin/single_part', [App\Http\Controllers\HomeController::class, 'single_part'])->name('admin.single_part');


    Route::post('/admin/about/update', [App\Http\Controllers\AboutController::class, 'update'])->name('admin.about.update');

});
