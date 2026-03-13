<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/blog-grids', function () {
    return view('blog-grids');
})->name('blog-grids');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
