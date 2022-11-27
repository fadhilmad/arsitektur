<?php

use App\Http\Controllers\Administrator\DashboardController;
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

/*
|  Route Administrator
*/

Route::prefix('/administrator')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('landing.about.index');
});

Route::get('/contact', function () {
    return view('landing.contact.index');
});
