<?php

use App\Http\Controllers\Frontend\WebsiteController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
    return redirect('/ar');
});

Route::get('{locale}/changeLocal', function ($locale) {

    App::setLocale($locale);

    $url = URL::previous();
    $previous = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
    $params = app('router')->getRoutes($url)->match(app('request')->create($url))->parameters();
    $arr = explode('.', $previous);
    $arr[0] = $locale;
    $next_route = implode('.', $arr);

    return redirect()->route($next_route, $params);
});

Route::middleware(['locale:ar', 'visitor'])->prefix('ar')->name('ar.')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about/eleven', 'about_eleven')->name('about.eleven');
    Route::get('/sport', 'sport')->name('sport');
    Route::get('/about/sport', 'about_sport')->name('about.sport');
    Route::get('/sport/activity/{id}', 'sport_activity')->name('sport.activity');
    Route::get('/sub/sport', 'sub_sport')->name('sub.sport');
    Route::get('/tourism/general', 'general_tourism')->name('tourism.general');
    Route::get('/tourism/activity/{id}', 'general_tourism_activity')->name('tourism.activity');
    Route::get('/sub/tourism/general', 'sub_general_tourism')->name('sub.tourism.general');
    Route::get('/tourism/medical', 'medical_tourism')->name('tourism.medical');
    Route::get('/sub/tourism/medical', 'sub_medical_tourism')->name('sub.tourism.medical');
    Route::get('/trading', 'trading')->name('trading');
    Route::get('/sub/trading', 'sub_trading')->name('sub.trading');
    Route::get('/real-estate', 'real_estate')->name('real-estate');
    Route::get('/sub/real-estate', 'sub_real_estate')->name('sub.real-estate');
    Route::get('/programming', 'programming')->name('programming');
    Route::get('/sub/programming', 'sub_programming')->name('sub.programming');
    Route::get('/teamwork', 'teamwork')->name('teamwork');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/tearms', 'tearms')->name('tearms');
});

Route::middleware(['locale:en', 'visitor'])->prefix('en')->name('en.')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about/eleven', 'about_eleven')->name('about.eleven');
    Route::get('/sport', 'sport')->name('sport');
    Route::get('/about/sport', 'about_sport')->name('about.sport');
    Route::get('/sport/activity/{id}', 'sport_activity')->name('sport.activity');
    Route::get('/sub/sport', 'sub_sport')->name('sub.sport');
    Route::get('/tourism/general', 'general_tourism')->name('tourism.general');
    Route::get('/tourism/activity/{id}', 'general_tourism_activity')->name('tourism.activity');
    Route::get('/sub/tourism/general', 'sub_general_tourism')->name('sub.tourism.general');
    Route::get('/tourism/medical', 'medical_tourism')->name('tourism.medical');
    Route::get('/sub/tourism/medical', 'sub_medical_tourism')->name('sub.tourism.medical');
    Route::get('/trading', 'trading')->name('trading');
    Route::get('/sub/trading', 'sub_trading')->name('sub.trading');
    Route::get('/real-estate', 'real_estate')->name('real-estate');
    Route::get('/sub/real-estate', 'sub_real_estate')->name('sub.real-estate');
    Route::get('/programming', 'programming')->name('programming');
    Route::get('/sub/programming', 'sub_programming')->name('sub.programming');
    Route::get('/teamwork', 'teamwork')->name('teamwork');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/tearms', 'tearms')->name('tearms');
});

Route::middleware(['locale:fr', 'visitor'])->prefix('fr')->name('fr.')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about/eleven', 'about_eleven')->name('about.eleven');
    Route::get('/sport', 'sport')->name('sport');
    Route::get('/about/sport', 'about_sport')->name('about.sport');
    Route::get('/sport/activity/{id}', 'sport_activity')->name('sport.activity');
    Route::get('/sub/sport', 'sub_sport')->name('sub.sport');
    Route::get('/tourism/general', 'general_tourism')->name('tourism.general');
    Route::get('/tourism/activity/{id}', 'general_tourism_activity')->name('tourism.activity');
    Route::get('/sub/tourism/general', 'sub_general_tourism')->name('sub.tourism.general');
    Route::get('/tourism/medical', 'medical_tourism')->name('tourism.medical');
    Route::get('/sub/tourism/medical', 'sub_medical_tourism')->name('sub.tourism.medical');
    Route::get('/trading', 'trading')->name('trading');
    Route::get('/sub/trading', 'sub_trading')->name('sub.trading');
    Route::get('/real-estate', 'real_estate')->name('real-estate');
    Route::get('/sub/real-estate', 'sub_real_estate')->name('sub.real-estate');
    Route::get('/programming', 'programming')->name('programming');
    Route::get('/sub/programming', 'sub_programming')->name('sub.programming');
    Route::get('/teamwork', 'teamwork')->name('teamwork');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/tearms', 'tearms')->name('tearms');
});

Route::middleware(['locale:tu', 'visitor'])->prefix('tu')->name('tu.')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about/eleven', 'about_eleven')->name('about.eleven');
    Route::get('/sport', 'sport')->name('sport');
    Route::get('/about/sport', 'about_sport')->name('about.sport');
    Route::get('/sport/activity/{id}', 'sport_activity')->name('sport.activity');
    Route::get('/sub/sport', 'sub_sport')->name('sub.sport');
    Route::get('/tourism/general', 'general_tourism')->name('tourism.general');
    Route::get('/tourism/activity/{id}', 'general_tourism_activity')->name('tourism.activity');
    Route::get('/sub/tourism/general', 'sub_general_tourism')->name('sub.tourism.general');
    Route::get('/tourism/medical', 'medical_tourism')->name('tourism.medical');
    Route::get('/sub/tourism/medical', 'sub_medical_tourism')->name('sub.tourism.medical');
    Route::get('/trading', 'trading')->name('trading');
    Route::get('/sub/trading', 'sub_trading')->name('sub.trading');
    Route::get('/real-estate', 'real_estate')->name('real-estate');
    Route::get('/sub/real-estate', 'sub_real_estate')->name('sub.real-estate');
    Route::get('/programming', 'programming')->name('programming');
    Route::get('/sub/programming', 'sub_programming')->name('sub.programming');
    Route::get('/teamwork', 'teamwork')->name('teamwork');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/tearms', 'tearms')->name('tearms');
});
