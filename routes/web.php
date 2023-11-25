<?php

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
Route::get('/login', [loginController::class, 'index']);
Route::post(
    '/login',
    [loginController::class, 'login']
)->name('login');

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