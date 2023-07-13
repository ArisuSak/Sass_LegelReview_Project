<?php

use App\Http\Controllers\FirmController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;



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


Route::get('/veiw', function () {
    return view('veiw');
});

Route::get('/advisor', function () {
    return view('advisor');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/feature', function () {
    return view('feature');
});


Route::get('/review', function () {
    return view('review');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/about', function () {
    return view('about');
});


// Route::get('/login', function () {
//     return view('auth.loginpage');
// });

Route::get('/register', function () {
    return view('registerpage');
});

Route::get('/service-lawyer', function () {
    return view('service_lawyer');
});

Route::get('/firm', function () {
    return view('firm');
});
Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/firm-form', function () {
//     return view('firm_form');
// });
// Route::get('/lawyer-form', function () {
//     return view('lawyer_form');
// });

// Route::get('/firm-data', [FirmController::class, 'showData']);
//firm data
Route::get('/firm-data',[FirmController::class, 'showData'])->name('firm_data');
Route::get('/firm-form', [FirmController::class, 'create']);
Route::post('/firm-data', [FirmController::class, 'store'])->name('firm-data');

//lawyer data
// Route::get('/lawyer-data/{id}',[LawyerController::class, 'showData'])->name('lawyer_data');
Route::get('/lawyer-data',[LawyerController::class, 'showData'])->name('lawyer_data');
Route::get('/lawyer-form', [LawyerController::class, 'create']);
Route::post('/lawyer-data', [LawyerController::class, 'storeData'])->name('lawyer-data');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



// Route::group(['middleware'=>['auth','role:user']],function(){
// Route:get('/index','App\Http\Controllers\DashboardController@myprofile')->name('');
// });

//firm provider role
Route::group(['middleware'=>['auth','role:firm_provider']],function(){
Route::get('/lawyer-form','App\Http\Controllers\DashboardController@lawyerform')->name('lawyerform');
});
//firm provider role
Route::group(['middleware'=>['auth','role:firm_provider']],function(){
Route::get('/firm-form','App\Http\Controllers\DashboardController@firmform')->name('firmform');
});


// //admin role
//     Route::group(['middleware'=>['auth','role:admin']],function(){
//     Route::get('/lawyer-data','App\Http\Controllers\DashboardController@lawyerdata')->name('lawyerdata');
//     });
//  //admin role
//     Route::group(['middleware'=>['auth','role:admin']],function(){
//     Route::get('/firm-data','App\Http\Controllers\DashboardController@firmdata')->name('firmdata');
//     });

//firm profile route base on id user
Route::get('/firm-profile/{id}', [FirmController::class, 'show'])->name('firm_profile');
Route::post('/firm-profile/{id}', [FirmController::class, 'show'])->name('firm_profile');
//display all firm
Route::get('/law-firm',[FirmController::class, 'showDataFirm'])->name('law_firm');
Route::post('/law-firm', [FirmController::class, 'storeData'])->name('law-firm');

//show each firm base on id
Route::get('/firm/{id}', [FirmController::class, 'showEachFirm'])->name('firm');



//service
// Route::get('/firm-profile/{id}', [ServiceController::class, 'show'])->name('firm_profile');
// Route::post('/firm-profile/{id}', [ServiceController::class, 'store'])->name('firm_profile');
Route::get('/service-form/{firmId}', [ServiceController::class, 'create'])->name('service-form');
Route::get('/service-data', [ServiceController::class, 'showAllService'])->name('service-data');
Route::get('/service-data/{firmId}', [ServiceController::class, 'show'])->name('service-data');
Route::post('/service-data/{firmId}', [ServiceController::class, 'storeData'])->name('service-data');
Route::post('/firm-profile/{id}', [ServiceController::class, 'storeData'])->name('firm_profile');
Route::get('/firm-profile/{id}', [FirmController::class, 'show'])->name('firm-profile');




//rating
Route::post('/firms/{id}/rate', 'FirmController@rate')->middleware('auth');
Route::post('/ratings', [FirmController::class, 'submitRating'])->name('ratings.submit');
Route::post('ratings/submit/{firm}', [FirmController::class, 'submitRating'])->name('ratings.submit');





//backend


//backend
// Route::get('/review-data', [FirmController::class, 'showAllReviewData'])->name('ratings');

// Route::delete('/firms/{id}', [FirmController::class, 'destroy'])->name('firm.destroy');
// Route::delete('/firm-data/{id}', [FirmController::class, 'destroy'])->name('firm.destroy');
// Route::delete('/service/{id}', [FirmController::class, 'destroyService'])->name('service.destroy');
// Route::delete('/rating/{id}', [FirmController::class, 'destroyRating'])->name('rating.destroy');
// Route::delete('/user/{id}', [FirmController::class, 'destroyUser'])->name('user.destroy');



// Route::get('/firm/{id}', [FirmController::class, 'showEachFirmBackend'])->name('firm');
// Route::get('/user-data', [FirmController::class, 'showUserData'])->name('user');


//backend
// Route::middleware(['auth'])->group(function () {
//     Route::get('/review-data', [FirmController::class, 'showAllReviewData'])->name('ratings');

//     Route::delete('/firms/{id}', [FirmController::class, 'destroy'])->name('firm.destroy');
//     Route::delete('/firm-data/{id}', [FirmController::class, 'destroy'])->name('firm.destroy');
//     Route::delete('/service/{id}', [FirmController::class, 'destroyService'])->name('service.destroy');
//     Route::delete('/rating/{id}', [FirmController::class, 'destroyRating'])->name('rating.destroy');
//     Route::delete('/user/{id}', [FirmController::class, 'destroyUser'])->name('user.destroy');

//     Route::get('/firm/{id}', [FirmController::class, 'showEachFirmBackend'])->name('firm');
//     Route::get('/user-data', [FirmController::class, 'showUserData'])->name('user');
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
//     Route::get('/', function () {
//         return view('dashboard');
//     });
// });

Route::group(['middleware' => ['auth', 'role:admin|super_admin']], function () {
    Route::get('/review-data', [FirmController::class, 'showAllReviewData'])->name('ratings');

    Route::delete('/firms/{id}', [FirmController::class, 'destroy'])->name('firm.destroy');
    Route::delete('/firm-data/{id}', [FirmController::class, 'destroy'])->name('firm.destroy');
    Route::delete('/service/{id}', [FirmController::class, 'destroyService'])->name('service.destroy');
    Route::delete('/rating/{id}', [FirmController::class, 'destroyRating'])->name('rating.destroy');
    Route::delete('/user/{id}', [FirmController::class, 'destroyUser'])->name('user.destroy');
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::get('/contact-data', [ContactController::class, 'showData'])->name('contact');
    Route::post('/contact-data', [ContactController::class, 'storeData'])->name('contact.store');
    Route::post('/contact-data', [ContactController::class, 'storeData'])->name('contact.store');

    Route::get('/firm/{id}', [FirmController::class, 'showEachFirmBackend'])->name('firm');
    Route::get('/user-data', [FirmController::class, 'showUserData'])->name('user');

    //user ban
    Route::post('/user/{id}/ban', [FirmController::class, 'ban'])->name('user.ban');
    Route::post('/user/{id}/unban', [FirmController::class, 'unban'])->name('user.unban');

    Route::get('/firm-data',[FirmController::class, 'showData'])->name('firm_data');
    Route::post('/firm-data', [FirmController::class, 'store'])->name('firm-data');

    Route::post('/firm/{id}/ban', [FirmController::class, 'banFirm'])->name('firm.ban');
    Route::post('/firm/{id}/unban', [FirmController::class, 'unbanFirm'])->name('firm.unban');

    Route::post('/contact/{id}/read', [ContactController::class, 'markContactAsRead'])->name('contact.markAsRead');
    Route::post('/contact/{id}/unread', [ContactController::class, 'markContactAsUnread'])->name('contact.markAsUnread');

    Route::get('/contact-archive', [ContactController::class, 'ShowdataArchive'])->name('contact');



    // Route for showing firm provider role data
    Route::get('/firm-provider-data', [FirmController::class, 'showFirmProviderRoleData'])->name('firm-provider-data');

    // Route for showing admin role data
    Route::get('/admin-data', [FirmController::class, 'showAdminRoleData'])->name('admin-data');





    //firm ban
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');

 
});

// Route::post('/user/{id}/ban', [FirmController::class, 'ban'])->name('user.ban');
// Route::post('/user/{id}/unban', [FirmController::class, 'unban'])->name('user.unban');


// Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');


// Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');


  



require __DIR__.'/auth.php';
