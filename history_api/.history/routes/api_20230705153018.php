<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;

use App\Http\Controllers\RatingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FirmController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LaywerController;
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

// Only Get can in , post can not//

/** Post ***/

/* Login */
//http://127.0.0.1:8000/api/login
Route::post('/login', [AuthenticatedSessionController::class,'store']);

/* Logout */
//http://127.0.0.1:8000/api/logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

/* confirm-password */
//http://127.0.0.1:8000/api/confirm-password
Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);

/* EmailVerificationNotificationController */
//http://127.0.0.1:8000/api/email/verification-notification
Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store']);

// /* New Password  */
// //http://127.0.0.1:8000/api/reset-password
// Route::post('/reset-password', [NewPasswordController::class, 'store']);

/* Register */
//http://127.0.0.1:8000/api/register
Route::post('/register', [ConfirmablePasswordController::class, 'store']);

/* Contact */
//http://127.0.0.1:8000/api/contact-data
Route::post('/contact-data', [ContactController::class, 'storeData']);

// <--- ask fronatend ---> //
//http://127.0.0.1:8000/api/firm-data
Route::post('/firm-data', [FirmController::class, 'store'])->name('firm-data');

/* Rating */
//http://127.0.0.1:8000/api/ratings
Route::post('/ratings', [RatingController::class, 'submitRating']);
//http://127.0.0.1:8000/api/ratings/submit/{firm}
Route::post('ratings/submit/{firm}', [RatingController::class, 'submitRating']);

/* service-data */
//http://127.0.0.1:8000/api/firm-profile/{id}
Route::post('/firm-profile/{id}', [ServiceController::class, 'storeData'])->name('firm_profile');

/** Get ***/

/* Login */
//http://127.0.0.1:8000/api/login
Route::get('/login', [AuthenticatedSessionController::class, 'create']);

/* confirm-password */
//http://127.0.0.1:8000/api/confirm-password
Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show']);

// /* Forgot-password */ (The error you're seeing is related to the blade template trying to access the $errors variable, which is not available in the JSON response.)
// //http://127.0.0.1:8000/api/forgot-password
// Route::get('/forgot-password', [PasswordResetLinkController::class, 'create']);

/* Contact */
//http://127.0.0.1:8000/api/contact-form
Route::get('/contact-form',[ContactController::class, 'showData']);

/** Backend ***/
/* Email  */
//http://127.0.0.1:8000/api/verify-email
Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke']);

/* FirmController */
//http://127.0.0.1:8000/api/law-firm
Route::get('/law-firm',[FirmController::class, 'showDataFirm']);
//http://127.0.0.1:8000/api/firm-form
Route::get('/firm-form', [FirmController::class, 'create']);

// // <--- CAN'T ACCESS ---> //
// //http://127.0.0.1:8000/api/lawyer-data
//     Route::get('/lawyer-data',[LawyerController::class, 'showData']);
// //http://127.0.0.1:8000/api/lawyer-data
//     Route::post('/lawyer-data', [LawyerController::class, 'storeData']);

/* Service Controller */
//http://127.0.0.1:8000/api/service-data/{firmId}
Route::get('/service-data/{firmId}', [ServiceController::class, 'show'])->name('service-data');
//http://127.0.0.1:8000/api/service-data{firmId}
Route::post('/service-data{firmId}', [ServiceController::class, 'storeData'])->name('service-data');

//http://127.0.0.1:8000/api/firm-profile/{id}
Route::get('/firm-profile/{id}', [FirmController::class, 'show'])->name('firm-profile');
//http://127.0.0.1:8000/api/service-data/{id}
Route::get('/service-data/{id}', [ServiceController::class, 'showAllService']);
//edit service
//http://127.0.0.1:8000/api/services/{id}/edit
Route::get('/services/{id}/edit', [ServiceController::class, 'editService'])->name('service.edit');
//http://127.0.0.1:8000/api/services/{id}
Route::put('/services/{id}', [ServiceController::class, 'updateService'])->name('service.update');
//firm service
//http://127.0.0.1:8000/api/service-form/{firmId}
Route::get('/service-form/{firmId}', [ServiceController::class, 'create']);

//firm service
//http://127.0.0.1:8000/api/service-data
Route::get('/service-data', [ServiceController::class, 'showAllService']);

Route::get('/service-data/{firmId}', [ServiceController::class, 'show'])->name('service-data');
Route::post('/service-data/{firmId}', [ServiceController::class, 'storeData'])->name('service-data');
Route::post('/firm-profile/{id}', [ServiceController::class, 'storeData'])->name('firm_profile');
Route::get('/firm-profile/{id}', [FirmController::class, 'show'])->name('firm-profile');
//edit service
Route::get('/services/{id}/edit', [ServiceController::class, 'editService'])->name('service.edit');
Route::put('/services/{id}', [ServiceController::class, 'updateService'])->name('service.update');







