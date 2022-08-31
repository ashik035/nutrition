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
    Route::get('/admin/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('admin.menu');
    // Route::get('/admin/post', [App\Http\Controllers\HomeController::class, 'post'])->name('admin.post');
    Route::post('/admin/about/update', [App\Http\Controllers\AboutController::class, 'update'])->name('admin.about.update');

    Route::get('/admin/banner', [App\Http\Controllers\BannerController::class, 'index'])->name('banner.index');
    Route::get('/admin/banner/create', [App\Http\Controllers\BannerController::class, 'create'])->name('banner.create');
    Route::post('/admin/banner/store', [App\Http\Controllers\BannerController::class, 'store'])->name('banner.store');
    Route::get('/admin/banner/show/{id}', [App\Http\Controllers\BannerController::class, 'show'])->name('banner.show');
    Route::get('/admin/banner/edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/admin/banner/update/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.update');
    Route::delete('/admin/banner/destroy/{id}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banner.destroy');

    Route::resource('/admin/post', App\Http\Controllers\PostController::class);
    Route::resource('/admin/blog', App\Http\Controllers\BlogController::class);
    Route::get('/admin/review/list', [App\Http\Controllers\ReviewController::class, 'list'])->name('review.list');
    Route::delete('/admin/review/destroy/{id}', [App\Http\Controllers\ReviewController::class, 'destroy'])->name('review.destroy');
    Route::resource('/admin/product', App\Http\Controllers\ProductController::class);
    Route::resource('/admin/course', App\Http\Controllers\CourseController::class);

});
