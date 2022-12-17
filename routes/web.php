<?php

use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\LoginController;
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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/login', [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');





Route::get('home', function () {
    return view('landing.home');
});

Route::get('/about', function () {
    return view('landing.about.index');
});

Route::get('/contact', function () {
    return view('landing.contact.index');
});

Route::get('/projects', function () {
    return view('landing.projects.index');
});

Route::get('/detail_project', function () {
    return view('landing.projects.detail_project');
});

Route::get('/interios', function () {
    return view('landing.interios.index');
});

Route::get('/arsitekture', function () {
    return view('landing.arsitekture.index');
});

Route::get('/miscellaneouse', function () {
    return view('landing.miscellaneouse.index');
});

Route::get('/commercial_index', function () {
    return view('landing.arsitekture.commercial.commercial_index');
});

Route::get('/residential_index', function () {
    return view('landing.arsitekture.residential.residential_index');
});

Route::get('/retail_index', function () {
    return view('landing.arsitekture.retail.retail_index');
});

Route::get('/project', function () {
        return view('administrator.project.interios');
});

// Route::prefix('/administrator')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     Route::get('/project', function () {
//         return view('administrator.project.interios');
//     });
// });
