<?php

use App\Http\Controllers\Administrator\ArchitectureController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\Frontend\AboutUsController;
use App\Http\Controllers\Administrator\Frontend\ContactUsController;
use App\Http\Controllers\Administrator\Frontend\IdentitasWebController;
use App\Http\Controllers\Administrator\Frontend\NavbarController;
use App\Http\Controllers\Administrator\Frontend\OurteamController;
use App\Http\Controllers\Administrator\Frontend\ServiceController;
use App\Http\Controllers\Administrator\Frontend\AboutProjectController;
use App\Http\Controllers\Administrator\InteriorController;
use App\Http\Controllers\Administrator\MasterData\KategoriArchitectureController;
use App\Http\Controllers\Administrator\MiscellaneouseController;
use App\Http\Controllers\Administrator\Frontend\SlideShowController;
use App\Http\Controllers\Administrator\UsersController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UtilsController;
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

// Route::get('/', function () {
//     return view('/landing/home', [HomeController::class, 'home']);
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|  Route Administrator
*/

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/debug', [UtilsController::class, 'debug'])->name('debug');

Route::prefix('/administrator')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ==> Users
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/profile', [UsersController::class, 'profile'])->name('users');

    // ==> Data Master
    Route::get('/datamaster/kategori-architecture', [KategoriArchitectureController::class, 'index'])->name('kategori_arsitektur');

    // Interior
    Route::get('/projeck-interior', [InteriorController::class, 'index'])->name('interior');
    Route::get('/projeck-interior-image/{id}', [InteriorController::class, 'image'])->name('image_interior');

    // Miscellaneouse
    Route::get('/projeck-miscellaneouse', [MiscellaneouseController::class, 'index'])->name('miscellaneouse');
    Route::get('/projeck-miscellaneouse-image/{id}', [MiscellaneouseController::class, 'image'])->name('image_miscellaneouse');

    // Architecture
    Route::get('/projeck-architecture', [ArchitectureController::class, 'index'])->name('architecture');
    Route::get('/projeck-architecture-image/{id}', [ArchitectureController::class, 'image'])->name('image_architecture');

    // Frontend
    Route::get('/frontend/ourteam', [OurteamController::class, 'index'])->name('ourteam');
    Route::get('/frontend/identitas-web', [IdentitasWebController::class, 'index'])->name('identitas');
    Route::get('/frontend/about-us', [AboutUsController::class, 'index'])->name('about-us');
    Route::get('/frontend/navbar', [NavbarController::class, 'index'])->name('navbar');
    Route::get('/frontend/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
    Route::get('/frontend/slide-show', [SlideShowController::class, 'index'])->name('slide-show');
    Route::get('/frontend/service', [ServiceController::class, 'index'])->name('service');
    
    Route::get('/frontend/about-project', [AboutProjectController::class, 'index'])->name('about-project');
    Route::get('/frontend/about-project-item/{id}', [AboutProjectController::class, 'item'])->name('about-project-item');
});

/*
|  Route Api
*/

Route::prefix('/api')->group(function () {
    Route::post('/auth', [LoginController::class, 'auth']);
    Route::get('/utils/kategori-architecture', [UtilsController::class, 'getKategoriArchitecture']);
    Route::get('/utils/navbar-parent', [UtilsController::class, 'getNavbarParent']);
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

    // Architecture
    Route::post('/architecture-fetch', [ArchitectureController::class, 'fetch']);
    Route::post('/architecture', [ArchitectureController::class, 'store']);
    Route::post('/architecture/{id}', [ArchitectureController::class, 'update']);
    Route::delete('/architecture/{id}', [ArchitectureController::class, 'destroy']);

    // Image Architecture
    Route::post('/architecture-image-fetch/{id}', [ArchitectureController::class, 'imageFetch']);
    Route::post('/architecture-image', [ArchitectureController::class, 'imageStore']);
    Route::post('/architecture-image/{id}', [ArchitectureController::class, 'imageUpdate']);
    Route::delete('/architecture-image/{id}', [ArchitectureController::class, 'imageDestroy']);

    // Master Architecture
    Route::post('/datamaster/kategori-architecture-fetch', [KategoriArchitectureController::class, 'fetch']);
    Route::post('/datamaster/kategori-architecture', [KategoriArchitectureController::class, 'store']);
    Route::post('/datamaster/kategori-architecture/{id}', [KategoriArchitectureController::class, 'update']);
    Route::delete('/datamaster/kategori-architecture/{id}', [KategoriArchitectureController::class, 'destroy']);

    // Ourteam
    Route::post('/frontend/ourteam-fetch', [OurteamController::class, 'fetch']);
    Route::post('/frontend/ourteam', [OurteamController::class, 'store']);
    Route::post('/frontend/ourteam/{id}', [OurteamController::class, 'update']);
    Route::delete('/frontend/ourteam/{id}', [OurteamController::class, 'destroy']);

    // Identitas Website
    Route::post('/frontend/identitas-web', [IdentitasWebController::class, 'store']);

    // About Us
    Route::post('/frontend/about-us', [AboutUsController::class, 'store']);

    // Navbar
    Route::post('/frontend/navbar-fetch', [NavbarController::class, 'fetch']);
    Route::post('/frontend/navbar', [NavbarController::class, 'store']);
    Route::post('/frontend/navbar/{id}', [NavbarController::class, 'update']);
    Route::delete('/frontend/navbar/{id}', [NavbarController::class, 'destroy']);

    // Contact Us
    Route::post('/frontend/contact-us-fetch', [ContactUsController::class, 'fetch']);

    // Slide Show
    Route::post('/frontend/slide-show-fetch', [SlideShowController::class, 'fetch']);
    Route::post('/frontend/slide-show', [SlideShowController::class, 'store']);
    Route::post('/frontend/slide-show/{id}', [SlideShowController::class, 'update']);
    Route::delete('/frontend/slide-show/{id}', [SlideShowController::class, 'destroy']);

    // Service
    Route::post('/frontend/service-fetch', [ServiceController::class, 'fetch']);
    Route::post('/frontend/service', [ServiceController::class, 'store']);
    Route::post('/frontend/service/{id}', [ServiceController::class, 'update']);
    Route::delete('/frontend/service/{id}', [ServiceController::class, 'destroy']);

    // About Project
    Route::post('/frontend/about-project-fetch', [AboutProjectController::class, 'fetch']);
    Route::post('/frontend/about-project', [AboutProjectController::class, 'store']);
    Route::post('/frontend/about-project/{id}', [AboutProjectController::class, 'update']);
    Route::delete('/frontend/about-project/{id}', [AboutProjectController::class, 'destroy']);

    // Item About Project
    Route::post('/frontend/about-project-item-fetch/{id}', [AboutProjectController::class, 'itemFetch']);
    Route::post('/frontend/about-project-item', [AboutProjectController::class, 'itemStore']);
    Route::post('/frontend/about-project-item/{id}', [AboutProjectController::class, 'itemUpdate']);
    Route::delete('/frontend/about-project-item/{id}', [AboutProjectController::class, 'itemDestroy']);

    // Profile
    Route::post('/profile', [UsersController::class, 'profileSave']);

    // Dashboard
    Route::post('/dashboard/data-chart', [DashboardController::class, 'getDataChart']);
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
