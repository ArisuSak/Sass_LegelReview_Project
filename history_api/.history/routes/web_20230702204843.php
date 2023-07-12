<?php

use App\Http\Controllers\FirmController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;



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
 return view('index');
});

Route::get('/veiw', function () {
    return view('veiw');
});

Route::get('/advisor', function () {
    return view('advisor');
});

Route::get('/blog', function () {
    return view('blog');
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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//display all firm
Route::get('/law-firm',[FirmController::class, 'showDataFirm'])->name('law_firm');
Route::post('/law-firm', [FirmController::class, 'storeData'])->name('law-firm');

//show each firm base on id
Route::get('/firm/{id}', [FirmController::class, 'showEachFirm'])->name('firm');


//rating
Route::post('/firms/{id}/rate', 'FirmController@rate')->middleware('auth');
Route::post('/ratings', [RatingController::class, 'submitRating'])->name('ratings.submit');
Route::post('ratings/submit/{firm}', [FirmController::class, 'submitRating'])->name('ratings.submit');


//contact
Route::get('/contact-form',[ContactController::class, 'showData'])->name('contact_data');
Route::get('/contact-form', [ContactController::class, 'create'])->name('contact');
Route::post('/contact-data', [ContactController::class, 'storeData'])->name('contact.store');
Route::post('/contact-form', [ServiceController::class, 'storeData'])->name('contact.store');
// Route::post('/contact-form', [ContactController::class, 'storeData'])->name('contact.store');
// Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');



// Route::group(['middleware'=>['auth','role:user']],function(){
// Route:get('/index','App\Http\Controllers\DashboardController@myprofile')->name('');
// });

//firm provider role
Route::group(['middleware'=>['auth','role:firm_provider']],function(){
Route::get('/lawyer-form','App\Http\Controllers\DashboardController@lawyerform')->name('lawyerform');
Route::get('/lawyer-data',[LawyerController::class, 'showData'])->name('lawyer_data');
Route::get('/lawyer-form', [LawyerController::class, 'create']);
Route::post('/lawyer-data', [LawyerController::class, 'storeData'])->name('lawyer-data');
});
//firm provider role
Route::group(['middleware'=>['auth','role:firm_provider']],function(){
Route::get('/firm-form','App\Http\Controllers\DashboardController@firmform')->name('firmform');
Route::get('/firm-data',[FirmController::class, 'showData'])->name('firm_data');
Route::get('/firm-form', [FirmController::class, 'create']);
Route::post('/firm-data', [FirmController::class, 'store'])->name('firm-data');


//firm edit
Route::put('/firms/{id}', [FirmController::class, 'updateFirm'])->name('firm.update');
Route::get('/firms/{id}/edit', [FirmController::class, 'editFirm'])->name('firm.edit');


//firm profile route base on id user
Route::get('/firm-profile/{id}', [FirmController::class, 'show'])->name('firm_profile');
Route::post('/firm-profile/{id}', [FirmController::class, 'show'])->name('firm_profile');

});
//firm service
Route::get('/service-form/{firmId}', [ServiceController::class, 'create'])->name('service-form');
Route::get('/service-data', [ServiceController::class, 'showAllService'])->name('service-data');
Route::get('/service-data/{firmId}', [ServiceController::class, 'show'])->name('service-data');
Route::post('/service-data/{firmId}', [ServiceController::class, 'storeData'])->name('service-data');
Route::post('/firm-profile/{id}', [ServiceController::class, 'storeData'])->name('firm_profile');
Route::get('/firm-profile/{id}', [FirmController::class, 'show'])->name('firm-profile');
//edit service
Route::get('/services/{id}/edit', [ServiceController::class, 'editService'])->name('service.edit');
Route::put('/services/{id}', [ServiceController::class, 'updateService'])->name('service.update');

// //admin role
//     Route::group(['middleware'=>['auth','role:admin']],function(){
//     Route::get('/lawyer-data','App\Http\Controllers\DashboardController@lawyerdata')->name('lawyerdata');
//     });
//  //admin role
//     Route::group(['middleware'=>['auth','role:admin']],function(){
//     Route::get('/firm-data','App\Http\Controllers\DashboardController@firmdata')->name('firmdata');
//     });







require __DIR__.'/auth.php';
