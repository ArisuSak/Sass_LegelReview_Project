<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FirmController;
use App\Http\Controllers\ServiceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Login */
//http://127.0.0.1:8000/api/login
Route::post('/login', [AuthenticatedSessionController::class,'store']);

/* Register */
//http://127.0.0.1:8000/api/register
Route::post('/register', [ConfirmablePasswordController::class, 'store']);

/* Contact */
//http://127.0.0.1:8000/api/contact-data
Route::post('/contact-data', [ContactController::class, 'storeData']);


/* FirmController */
//http://127.0.0.1:8000/api/law-firm
Route::get('/law-firm',[FirmController::class, 'showDataFirm']);
//http://127.0.0.1:8000/api/firm-form
Route::get('/firm-form', [FirmController::class, 'create']);
// <--- ask fronatend ---> //
//http://127.0.0.1:8000/api/firm-data
Route::post('/firm-data', [FirmController::class, 'store'])->name('firm-data');

/* Rating */
//http://127.0.0.1:8000/api/ratings
Route::post('/ratings', [RatingController::class, 'submitRating']);


/** Get ***/

/* Contact */
//http://127.0.0.1:8000/api/contact-form
Route::get('/contact-form',[ContactController::class, 'showData']);

/* FirmController */
//http://127.0.0.1:8000/api/law-firm
Route::get('/law-firm',[FirmController::class, 'showDataFirm']);
//http://127.0.0.1:8000/api/firm-form
Route::get('/firm-form', [FirmController::class, 'create']);

/* Service Controller */
//http://127.0.0.1:8000/api/service-data
Route::get('/service-data', [ServiceController::class, 'showAllService']);

// Only Get can in web, post can not//






