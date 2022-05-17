<?php

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

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comingsoon');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');
Route::get('/who-we-are', [App\Http\Controllers\HomeController::class, 'whoweare'])->name('whoweare');
Route::get('/what-we-offer-client', [App\Http\Controllers\HomeController::class, 'whatweofferclient'])->name('whatweofferclient');
Route::get('/what-we-offer-artist', [App\Http\Controllers\HomeController::class, 'whatweofferartist'])->name('whatweofferartist');
Route::get('/our-artists', [App\Http\Controllers\HomeController::class, 'ourartists'])->name('ourartists');
Route::get('/join-us', [App\Http\Controllers\HomeController::class, 'joinus'])->name('joinus');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/book-artist', [App\Http\Controllers\HomeController::class, 'bookartist'])->name('bookartist');
Route::get('/personal', [App\Http\Controllers\HomeController::class, 'personal'])->name('personal');

Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'root'])->name('root');
//Route::get('/login', [App\Http\Controllers\AdminController::class, 'root'])->name('root');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin-main', [AdminController::class, 'main'])->name('admin_main');
    Route::get('/admin-contact', [AdminController::class, 'contact'])->name('admin_contact');
    Route::get('/admin-whoweare', [AdminController::class, 'whoweare'])->name('admin_whoweare');
    Route::get('/admin-whatweofferclient', [AdminController::class, 'whatweofferclient'])->name('admin_whatweofferclient');
    Route::get('/admin-whatweofferartist', [AdminController::class, 'whatweofferartist'])->name('admin_whatweofferartist');
    Route::get('/admin-joinus', [AdminController::class, 'joinus'])->name('admin_joinus');
    Route::get('/admin-bookartist', [AdminController::class, 'bookartist'])->name('admin_bookartist');

    Route::get('/admin-artist', [AdminController::class, 'artist'])->name('admin_artist');
    Route::post('/add-artist', [AdminController::class, 'add_artist'])->name('add_artist');
    Route::get('/edit-artist/{id}', [AdminController::class, 'edit_artist'])->name('artist.edit');
    Route::post('/update-artist/{id}', [AdminController::class, 'update_artist'])->name('artist.update');
    Route::delete ('/delete-artist/{id}', [AdminController::class, 'artist_delete'])->name('artist.delete');
});
