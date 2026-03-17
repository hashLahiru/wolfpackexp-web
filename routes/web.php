<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
})->name('home');

Route::get('/about', function () {
    return view('web.about');
})->name('about');

Route::get('/tours', function () {
    return view('web.tours');
})->name('tours');

Route::get('/gallery', function () {
    return view('web.gallery');
})->name('gallery');

Route::get('/booking', function () {
    return view('web.booking');
})->name('booking');

Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('web.blog');
})->name('blog');

Route::get('/tour-details', function () {
    return view('web.tour-details');
})->name('tour.details');

Route::get('/mountain-trekking', function () {
    return view('web.tours.mountain-trekking');
})->name('tour.mountain-trekking');

Route::get('/hiking-adventures', function () {
    return view('web.tours.hiking-adventures');
})->name('tour.hiking-adventures');

Route::get('/pekoe-trail', function () {
    return view('web.tours.pekoe-trail');
})->name('tour.pekoe-trail');

Route::get('/wildlife-exploration', function () {
    return view('web.tours.wildlife-exploration');
})->name('tour.wildlife-exploration');

Route::get('/wildlife-safari', function () {
    return view('web.tours.wildlife-safari');
})->name('tour.wildlife-safari');

Route::get('/water-adventures', function () {
    return view('web.tours.water-adventures');
})->name('tour.water-adventures');

Route::get('/road-trip-adventures', function () {
    return view('web.tours.road-trip-adventures');
})->name('tour.road-trip-adventures');

Route::get('/waterfall-hunting', function () {
    return view('web.tours.waterfall-hunting');
})->name('tour.waterfall-hunting');

Route::get('/forest-bathing', function () {
    return view('web.tours.forest-bathing');
})->name('tour.forest-bathing');

Route::get('/blog-details', function () {
    return view('web.blog-details');
})->name('blog.details');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
