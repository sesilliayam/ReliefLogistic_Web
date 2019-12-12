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

Route::get('/', function () {
    return view('landingpage/landingpage');
})->name('landingpage');

Route::get('/login', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routing Views
Route::get('/event', function () {
    return view('contents/event/event');
})->name('event');

Route::get('/activity', function () {
    return view('contents/activity/activity');
})->name('activity');

Route::get('/about', function () {
    return view('contents/about/about');
})->name('about');

Route::get('/contact', function () {
    return view('contents/contact/contact');
})->name('contact');

Route::get('/community', function () {
    return view('contents/community/community');
})->name('community');

//buat Event
Route::resource('event','EventController');
Route::get('/detailevent', function () {
    return view('contents.event.eventdetail');
})->name('eventdetail');

//buat daftarEvent
Route::resource('daftarevent', 'DaftarEventController');