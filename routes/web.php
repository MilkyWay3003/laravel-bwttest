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

Auth::routes();

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/weather');
    }

    return view('auth.register');
});

Route::get('/weather', 'WeatherController@index');

Route::get('/feedback', 'FeedbackController@index');
Route::post('/feedback', 'FeedbackController@store')
    ->name('feedback.store');
Route::get('/feedback/list', 'FeedbackController@showFeedbacks')
    ->name('feedbacks.list');
