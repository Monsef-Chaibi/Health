<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::match(['get', 'post'], '/Emergency', [Controller::class, 'Emergency'])->name('Emergency');

Route::match(['get', 'post'], '/Critical', [Controller::class, 'Critical'])->name('Critical');

Route::match(['get', 'post'], '/Virtual', [Controller::class, 'Virtual'])->name('Virtual');

Route::match(['get', 'post'], '/Hospital', [Controller::class, 'Hospital'])->name('Hospital');

Route::match(['get', 'post'], '/Clinical', [Controller::class, 'Clinical'])->name('Clinical');

Route::match(['get', 'post'], '/Connected', [Controller::class, 'Connected'])->name('Connected');

Route::prefix('Company')->group(function () {

    Route::match(['get', 'post'], '/Health', [Controller::class, 'Health'])->name('Health');

    Route::match(['get', 'post'], '/Partner', [Controller::class, 'Partner'])->name('Partner');

    Route::match(['get', 'post'], '/Leaders', [Controller::class, 'Leaders'])->name('Leaders');

    Route::match(['get', 'post'], '/Technology', [Controller::class, 'Technology'])->name('Technology');

    Route::match(['get', 'post'], '/Sustainability', [Controller::class, 'Sustainability'])->name('Sustainability');

    Route::match(['get', 'post'], '/Corporate', [Controller::class, 'Corporate'])->name('Corporate');

});

Route::prefix('Clinical-Careers')->group(function () {

    Route::match(['get', 'post'], '/Working-SCP', [Controller::class, 'Working'])->name('Working');

    Route::match(['get', 'post'], '/Clinical-Education', [Controller::class, 'ClinicalEducation'])->name('ClinicalEducation');

});

Route::prefix('New-Resources')->group(function () {

    // Route::match(['get', 'post'], '/Resources', [Controller::class, 'Resources'])->name('Resources');

    // Route::match(['get', 'post'], '/Blog', [Controller::class, 'Blog'])->name('Blog');

    // Route::match(['get', 'post'], '/News', [Controller::class, 'News'])->name('News');

    Route::match(['get', 'post'], '/Events', [Controller::class, 'Events'])->name('Events');

});


Route::match(['get', 'post'], '/Contact-Us', [Controller::class, 'ContactUs'])->name('Contact-Us');
