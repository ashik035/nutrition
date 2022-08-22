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

Route::get('/program/one-on-one', function () {
    return view('frontend.program.one-on-one');
});
Route::get('/program/online-fitness-coaching-for-general', function () {
    return view('frontend.program.onilne-fitness-coaching');
});
Route::get('/program/PCOS', function () {
    return view('frontend.program.PCOS');
});
Route::get('/program/HDDA', function () {
    return view('frontend.program.HDDA');
});
Route::get('/program/exersize-and-diet', function () {
    return view('frontend.program.Exersize-and-diet');
});
Route::get('/program/customize-diet-plan', function () {
    return view('frontend.program.customize-diet-plan');
});
Route::get('/program/customize-workout-diet', function () {
    return view('frontend.program.customize-workout-diet');
});
Route::get('/shop/shop-all', function () {
    return view('frontend.shop.shop-all');
});


Route::get('/online-live-class', function () {
    return view('frontend.online-live-class');
});



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
