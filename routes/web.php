<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkindiaryController;
use App\Http\Controllers\SurveyController;



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

Route::middleware('guest')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/signup', function () {
        return view('user/signup');
    });
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'validation']);
    Route::post('/signup', [RegisterController::class, 'store']);
});

// Route::get('/login', [UserController::class, 'login']);



// Route::get('/signup', [UserController::class, 'signup']);

Route::middleware('auth')->group(function () {
    Route::get('/profil', function () {
        return view('user/profil');
    });
    Route::get('/home', [UserController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout']);
    // Route::get('/profil', [UserController::class, 'profil']);

    Route::get('/survey', function () {
        return view('user/survey');
    });

    // Route::get('/survey', [SurveyController::class, 'survey']);

    Route::get('/edit-profil', function () {
        return view('user/edit-profil');
    });

    Route::get('/skindiary', function () {
        return view('user/skindiary');
    });

    // Route::get('/skindiary', [SkindiaryController::class, 'skindiary']);

    Route::get('/skin-check', function () {
        return view('user/skin-check');
    });

    Route::get('/bantuan', function () {
        return view('bantuan');
    });

    Route::get('/about-us', function () {
        return view('about-us');
    });

    Route::get('/Analyze-Product', function () {
        return view('user/Analyze-Product');
    });

    Route::get('/hasil-searching', function () {
        return view('user/hasil-searching');
    });
});
