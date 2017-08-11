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
    return view('home');
})->name('home');

Route::get('/ido/registry', function () {
	return redirect('https://www.amazon.com/wedding/share/jolly');
})->name('wedding.registry');

Route::get('/registry', function () {
	return redirect()->route('wedding.registry');
});

Route::get('/ido/rsvp', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSd_WazCjrINn0ljIVKDALHZqPyesEapTlv4gHutt9McxnDT_A/viewform?usp=sf_link');
})->name('wedding.rsvp');

Route::get('/rsvp', function () {
	return redirect()->route('wedding.rsvp');
});