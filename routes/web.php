<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::prefix('olympics')->namespace('Olympics')->group(function () {
    Route::resource('athletes', 'AthleteController')->names('olympics.athletes');
    Route::resource('countries', 'CountryController')->names('olympics.countries');
    Route::resource('sports', 'SportController')->names('olympics.sports');
});
