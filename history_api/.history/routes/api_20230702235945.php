<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FirmController;
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
//http://127.0.0.1:8000/api/contact-form
Route::get('/contact-form',[ContactController::class, 'showData']);

/* Contact */
//http://127.0.0.1:8000/api/law-firm
Route::get('/law-firm',[FirmController::class, 'showDataFirm']);
//http://127.0.0.1:8000/api/law-firm
Route::post('/law-firm', [FirmController::class, 'storeData'])->name('law-firm');


//http://127.0.0.1:8000/api/firm-data
Route::post('/firm-data', [FirmController::class, 'store'])->name('firm-data');
//http://127.0.0.1:8000/api/firm-form
Route::get('/firm-form', [FirmController::class, 'create']);


