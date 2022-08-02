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
Route::get('/ori-artist-mentoring', [App\Http\Controllers\HomeController::class, 'oriartistmentoring'])->name('oriartistmentoring');
Route::get('/what-we-offer-client', [App\Http\Controllers\HomeController::class, 'whatweofferclient'])->name('whatweofferclient');
Route::get('/what-we-offer-artist', [App\Http\Controllers\HomeController::class, 'whatweofferartist'])->name('whatweofferartist');
Route::get('/book-ori-artists', [App\Http\Controllers\HomeController::class, 'bookoriartists'])->name('bookoriartists');
Route::get('/become-an-oriartist', [App\Http\Controllers\HomeController::class, 'becomeanoriartist'])->name('becomeanoriartist');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/book-artist', [App\Http\Controllers\HomeController::class, 'bookartist'])->name('bookartist');
Route::post('/contact-me', [App\Http\Controllers\HomeController::class, 'contactme'])->name('contactme');
Route::post('/joinus-form', [App\Http\Controllers\HomeController::class, 'joinusform'])->name('joinusform');
Route::post('/bookartist-form', [App\Http\Controllers\HomeController::class, 'bookartistform'])->name('bookartistform');
Route::post('/bookartist-form1/{id}', [App\Http\Controllers\HomeController::class, 'bookartistform1'])->name('bookartistform1');
Route::get('/personal/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'personal'])->name('personal');







Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'root'])->name('root');
//Route::get('/login', [App\Http\Controllers\AdminController::class, 'root'])->name('root');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin-main', [AdminController::class, 'main'])->name('admin_main');
    Route::get('/admin-contact', [AdminController::class, 'contact'])->name('admin_contact');
    Route::get('/admin-whoweare', [AdminController::class, 'whoweare'])->name('admin_whoweare');

    Route::get('/whatweoffer-client', [AdminController::class, 'whatweoffer_client'])->name('admin_whatweofferclient');
    Route::get('/packages-client', [AdminController::class, 'packages_client'])->name('packages_client');
    Route::post('/whatweofferclient-update', [AdminController::class, 'whatweofferclient_update'])->name('admin.update_whatweofferclient');


    Route::get('/whatweoffer-artist', [AdminController::class, 'whatweoffer_artist'])->name('admin_whatweofferartist');
    Route::get('/packages-artist', [AdminController::class, 'packages_artist'])->name('artist_packages');
    Route::post('/package-update/{id}', [AdminController::class, 'packages_update'])->name('update_packages');
    Route::post('/whatweofferartist-update', [AdminController::class, 'whatweofferartist_update'])->name('admin.update_whatweofferartist');


    Route::get('/admin-joinus', [AdminController::class, 'joinus'])->name('admin_joinus');
    Route::get('/admin-bookartist', [AdminController::class, 'bookartist'])->name('admin_bookartist');

    Route::get('/admin-artist', [AdminController::class, 'artist'])->name('admin_artist');
    Route::post('/add-artist', [AdminController::class, 'add_artist'])->name('add_artist');
    Route::get('/edit-artist/{id}', [AdminController::class, 'edit_artist'])->name('artist.edit');
    Route::post('/update-artist/{id}', [AdminController::class, 'update_artist'])->name('artist.update');
    Route::delete ('/delete-artist/{id}', [AdminController::class, 'artist_delete'])->name('artist.delete');

    Route::get('/admin-slider', [AdminController::class, 'slider'])->name('admin_slider');
    Route::post('/add-slider', [AdminController::class, 'add_slider'])->name('add_slider');
    Route::get ('/slider-edit/{id}', [AdminController::class, 'slider_edit'])->name('slider.edit');
    Route::post('/slider-update/{id}', [AdminController::class, 'slider_update'])->name('slider.update');
    Route::delete('/slider-delete/{id}', [AdminController::class, 'slider_delete'])->name('slider.delete');

    Route::get('/admin-testimonial', [AdminController::class, 'testimonial'])->name('admin_testimonial');
    Route::post('/add-testimonial', [AdminController::class, 'add_testimonial'])->name('add_testimonial');
    Route::get ('/testimonial-edit/{id}', [AdminController::class, 'testimonial_edit'])->name('testimonial.edit');
    Route::post('/testimonial-update/{id}', [AdminController::class, 'testimonial_update'])->name('testimonial.update');
    Route::delete('/testimonial-delete/{id}', [AdminController::class, 'testimonial_delete'])->name('testimonial.delete');

    Route::get('/admin-oriartistmentoring', [AdminController::class, 'oriartistmentoring'])->name('admin.oriartistmentoring');
    Route::post('/oriartistmentoring-update', [AdminController::class, 'oriartistmentoring_update'])->name('admin.update_oriartistmentoring');

    Route::get('/admin-hello', [AdminController::class, 'hello'])->name('admin.hello');
    Route::post('/hello-update', [AdminController::class, 'hello_update'])->name('admin.update_hello');

    Route::get('/admin-contact', [AdminController::class, 'contact'])->name('admin.contact');
    Route::post('/contact-update', [AdminController::class, 'contact_update'])->name('admin.update_contact');

    Route::get('/admin-joinusforms', [AdminController::class, 'joinusforms'])->name('admin.joinusforms');

    Route::get('/admin-joinuspage', [AdminController::class, 'joinuspage'])->name('admin.joinuspage');
    Route::post('/joinuspage-update', [AdminController::class, 'joinuspage_update'])->name('admin.update_joinuspage');

    Route::get('/admin-bookartistforms', [AdminController::class, 'bookartistforms'])->name('admin.bookartistforms');
    Route::get('/admin-contactforms', [AdminController::class, 'contactforms'])->name('admin.contactforms');

    Route::get('/admin-bookartistpage', [AdminController::class, 'bookartistpage'])->name('admin.bookartistpage');
    Route::post('/bookartistpage-update', [AdminController::class, 'bookartistpage_update'])->name('admin.update_bookartistpage');

    Route::get('/admin-bookoriartistpage', [AdminController::class, 'bookoriartistpage'])->name('admin.bookoriartistpage');
    Route::post('/bookoriartistpage-update', [AdminController::class, 'bookoriartistpage_update'])->name('admin.update_bookoriartistpage');


    Route::get('/admin-services', [AdminController::class, 'service'])->name('admin_service');
    Route::post('/add-service', [AdminController::class, 'add_service'])->name('add_service');
    Route::get ('/service-edit/{id}', [AdminController::class, 'service_edit'])->name('service.edit');
    Route::post('/service-update/{id}', [AdminController::class, 'service_update'])->name('service.update');
    Route::delete('/service-delete/{id}', [AdminController::class, 'service_delete'])->name('service.delete');

    Route::get('/admin-artists', [AdminController::class, 'artists'])->name('admin.artists');
    Route::post('/admin-add-artist', [AdminController::class, 'add_artist_page'])->name('admin.add_artist_page');

    Route::post('/artist-add', [AdminController::class, 'artist_add'])->name('artist.add');
    Route::get('/artist-add-page', [AdminController::class, 'artist_add_page'])->name('artist.addpage');
    Route::get ('/artist-edit/{id}', [AdminController::class, 'artist_edit'])->name('artist.edit');
    Route::post('/artist-update/{id}', [AdminController::class, 'artist_update'])->name('artist.update');
    Route::delete('/artist-delete/{id}', [AdminController::class, 'artist_delete'])->name('artist.delete');
    Route::get('/finish', [AdminController::class, 'finish'])->name('finish');

    Route::delete('/photo-delete/{id}', [AdminController::class, 'photo_delete'])->name('photo.delete');
    Route::post('/add-photos/{id}', [AdminController::class, 'add_photos'])->name('artist.add_new_photos');









});
