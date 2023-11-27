<?php

use App\Http\Controllers\user\DashbordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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
})->name('welcome');
Route::middleware(['web'])->group(function () {
    // Your routes go here
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('do.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/Registration', [loginController::class, 'registration'])->name('registration');
// Registration/SaveRegistration
Route::post(
    '/Registration/SaveRegistration',
    [loginController::class, 'saveRegistration']
)->name('registration.save');
// home.notification
Route::get('/Home/Notification', function () {
    return view('notification');
})->name('home.notification');

// user dashboard
//make group for user dashboard and add middleware for auth as user 
Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth', 'form_step']], function () {

    Route::get('/redirectToStep', [DashbordController::class, 'redirectToStep'])->name('redirectToStep');

    Route::get('/dashboard', [DashbordController::class, 'index'])->name('dashboard');
    Route::get('/Qualification', [DashbordController::class, 'qualificationDetails'])->name('qualificationDetails');
    Route::post('/Qualification', [DashbordController::class, 'qualificationDetailsStore'])->name('qualificationDetails.store');
    Route::get('/Experience', [DashbordController::class, 'ExperienceDetails'])->name('experienceDetails');
    Route::post('/Experience', [DashbordController::class, 'ExperienceDetailsStore'])->name('experienceDetails.store');
    Route::get('/FeePayment', [DashbordController::class, 'FeePayment'])->name('payment');
    Route::post('/FeePayment', [DashbordController::class, 'paymentStore'])->name('payment.store');
    Route::get('/CenterChoiceNew', [DashbordController::class, 'CenterChoiceNew'])->name('centerChoiceNew');
});
