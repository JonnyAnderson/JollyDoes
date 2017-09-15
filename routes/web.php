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



// #JollyDoesIDo...

Route::get('/ido',					'IDoController@index')->name('ido');

Route::get('/ido/registry', function () {
	return redirect('https://www.amazon.com/wedding/share/jolly');
})->name('ido.registry');

Route::get('/registry', function () {
	return redirect()->route('ido.registry');
});

Route::get('/Registry', function () {
	return redirect()->route('ido.registry');
});

Route::get('/IDo/registry', function () {
	return redirect()->route('ido.registry');
});

Route::get('/IDo/Registry', function () {
	return redirect()->route('ido.registry');
});

Route::get('/IDO/registry', function () {
	return redirect()->route('ido.registry');
});

Route::get('/IDO/Registry', function () {
	return redirect()->route('ido.registry');
});

Route::get('/ido/rsvp', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSd_WazCjrINn0ljIVKDALHZqPyesEapTlv4gHutt9McxnDT_A/viewform?usp=sf_link');
})->name('ido.rsvp');

Route::get('/rsvp', function () {
	return redirect()->route('ido.rsvp');
});

Route::get('/RSVP', function () {
	return redirect()->route('ido.rsvp');
});

Route::get('/IDo/RSVP', function () {
	return redirect()->route('ido.rsvp');
});

Route::get('/IDo/rsvp', function () {
	return redirect()->route('ido.rsvp');
});

Route::get('/IDO/RSVP', function () {
	return redirect()->route('ido.rsvp');
});

Route::get('/IDO/rsvp', function () {
	return redirect()->route('ido.rsvp');
});




