<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('user/login');
 });

// Route::get('/login', [UserController::class, 'login']);

Route::get('/signup', function () {
    return view('user/signup');
});

// Route::get('/signup', [UserController::class, 'signup']);

Route::get('/profil', function () {
    return view('user/profil');
}); 

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