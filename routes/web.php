<?php

use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\InteriorController;
use App\Http\Controllers\Administrator\MiscellaneouseController;
use App\Http\Controllers\Administrator\UsersController;
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
    return view('landing.home');
});

/*
|  Route Administrator
*/

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('/administrator')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    
    // Interior
    Route::get('/projeck-interior', [InteriorController::class, 'index'])->name('interior');
    Route::get('/projeck-interior-image/{id}', [InteriorController::class, 'image'])->name('image_interior');

    // Miscellaneouse
    Route::get('/projeck-miscellaneouse', [MiscellaneouseController::class, 'index'])->name('miscellaneouse');
    Route::get('/projeck-miscellaneouse-image/{id}', [MiscellaneouseController::class, 'image'])->name('image_miscellaneouse');
});

/*
|  Route Api
*/

Route::prefix('/api')->group(function () {
    Route::post('/auth', [LoginController::class, 'auth']);
});

Route::prefix('/api/administrator')->middleware('auth')->group(function () {
    // Users
    Route::post('/users-fetch', [UsersController::class, 'fetch']);
    Route::post('/users', [UsersController::class, 'store']);
    Route::post('/users/{id}', [UsersController::class, 'update']);
    Route::delete('/users/{id}', [UsersController::class, 'destroy']);

    // Interior
    Route::post('/interior-fetch', [InteriorController::class, 'fetch']);
    Route::post('/interior', [InteriorController::class, 'store']);
    Route::post('/interior/{id}', [InteriorController::class, 'update']);
    Route::delete('/interior/{id}', [InteriorController::class, 'destroy']);

    // Image Interior
    Route::post('/interior-image-fetch/{id}', [InteriorController::class, 'imageFetch']);
    Route::post('/interior-image', [InteriorController::class, 'imageStore']);
    Route::post('/interior-image/{id}', [InteriorController::class, 'imageUpdate']);
    Route::delete('/interior-image/{id}', [InteriorController::class, 'imageDestroy']);

    // Miscellaneouse
    Route::post('/miscellaneouse-fetch', [MiscellaneouseController::class, 'fetch']);
    Route::post('/miscellaneouse', [MiscellaneouseController::class, 'store']);
    Route::post('/miscellaneouse/{id}', [MiscellaneouseController::class, 'update']);
    Route::delete('/miscellaneouse/{id}', [MiscellaneouseController::class, 'destroy']);

    // Image Miscellaneouse
    Route::post('/miscellaneouse-image-fetch/{id}', [MiscellaneouseController::class, 'imageFetch']);
    Route::post('/miscellaneouse-image', [MiscellaneouseController::class, 'imageStore']);
    Route::post('/miscellaneouse-image/{id}', [MiscellaneouseController::class, 'imageUpdate']);
    Route::delete('/miscellaneouse-image/{id}', [MiscellaneouseController::class, 'imageDestroy']);
});

/*
| Route Landing
*/

Route::get('/index', function () {
    return view('layout.login.index');
});

Route::get('/about', function () {
    return view('landing.about.index');
});

Route::get('/contact', function () {
    return view('landing.contact.index');
});


Route::get('/detail_project', function () {
    return view('landing.detail_project');
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

Route::get('/detail_interiors', function () {
    return view('landing.detail_project.detail_interiors');
});

Route::get('/detail_miscellaneouse', function () {
    return view('landing.detail_project.detail_miscellaneouse');
});

Route::get('/detail_arsitekture', function () {
    return view('landing.detail_project.detail_arsitekture');
});

// Route::prefix('/administrator')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     Route::get('/project', function () {
//         return view('administrator.project.interios');
//     });
// });
