<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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
Route::middleware(['checkDemoExpiration'])->group(function () {
Route::get('/', function () {
    return view('welcome');
});

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



    Route::get('/change-locale/{locale}', function ($locale) {Session::put('locale', $locale);return back();})->name('change-locale');

    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

    Route::get('/reservation/confirm/{token}', [ReservationController::class, 'confirm'] )->name('reservation.confirm');


Route::prefix('Admin')->group(function () {

    Route::match(['get', 'post'], '/Login', [Admin::class, 'Login'])->name('Login');

    Route::match(['get', 'post'], '/loginRequest', [Admin::class, 'loginRequest'])->name('loginRequest');

    Route::match(['get', 'post'], '/Dash', [Admin::class, 'Dash'])->name('Dash');

    Route::match(['get', 'post'], '/Plans/Add', [Admin::class, 'AddPlans'])->name('AddPlans');

    Route::match(['get', 'post'], '/Plans/Edit', [Admin::class, 'EditPlans'])->name('EditPlans');

    Route::post('/services/store', [Admin::class, 'store'])->name('services.store');

    Route::get('/services/edit/{service}', [Admin::class, 'edit'])->name('editServiceRouteName');

    Route::delete('/service/{service}', [Admin::class, 'delete'])->name('deleteServiceRouteName');

    Route::match(['get', 'post' , 'put'], '/UpService//{service}', [Admin::class, 'UpService'])->name('UpService');

    Route::match(['get', 'post'], '/AllReservation', [Admin::class, 'AllReservation'])->name('AllReservation');

    Route::match(['get', 'post'], '/Reservation/Edit', [Admin::class, 'ReservationEdit'])->name('ReservationEdit');

    // In routes/web.php

    // Route for showing the edit form
    Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');

    // Route for the delete action
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

    Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');



});
