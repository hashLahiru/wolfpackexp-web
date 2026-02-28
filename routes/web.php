<?php

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

Route::get('/blog-details', function () {
    return view('web.blog-detials');
})->name('blog.details');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
