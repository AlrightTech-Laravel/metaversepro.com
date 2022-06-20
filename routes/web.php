<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeginController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\LogisticsController;
use App\Http\Controllers\PrioritiesController;
use App\Http\Controllers\SpecialitiesController;
use App\Http\Controllers\ZipController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\App;

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
//     return view('welcome');
// });

Route::group(['middleware' => ['auth','isAdmin']] , function() {
    // Admin Panel
Route::get('/dashboard', [AdminController::class, 'panel'])->name('panel');
Route::get('/view-requests', [AdminController::class, 'request'])->name('request');
Route::get('/delete-requests/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('view-therapists', [AdminController::class, 'viewTherapist'])->name('viewTherapist');
Route::get('delete-therapist/{id}', [AdminController::class, 'deleteTherapist'])->name('deleteTherapist');
Route::get('approve-therapist/{id}', [AdminController::class, 'approveTherapist'])->name('approveTherapist');
Route::get('reject-therapist/{id}', [AdminController::class, 'rejectTherapist'])->name('rejectTherapist');

Route::get('all-students', [AdminController::class, 'allStudents'])->name('all-students');
Route::get('delete-student/{id}', [AdminController::class, 'deleteStudents'])->name('delete-student');

// Zip Code

Route::get('zipcode', function () {
    return view('Admin.Zip.add_zipCode');
});

Route::post('/add-zipcode', [ZipController::class, 'index']);
Route::get('/view-zipcode', [ZipController::class, 'view']);
Route::get('/delete-zipcode/{id}', [ZipController::class, 'delete']);

});

Route::redirect('/', 'match/begin');
Route::get('form', function () {
    return view('profile_create');
});


// ---------------Users-------------
 Route::post('register-user', [RegisterController::class, 'registerUser']);
 // ---------------HOME------------

Route::controller(HomeController::class)->name('match.')->prefix('match')->group(function () {

    Route::prefix('begin')->name('begin.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('go', 'begin_go')->name('go');
        Route::get('gender', 'begin_gender')->name('gender');
        Route::get('lgbtqia', 'begin_lgbtqia')->name('lgbtqia');
        Route::get('age', 'begin_age')->name('age');
        Route::get('ethnicity', 'begin_ethnicity')->name('ethnicity');
    });

    Route::prefix('logistics')->name('logistics.')->group(function () {
        Route::get('/', 'logistics_index')->name('index');
        Route::get('about', 'logistics_about')->name('about');
        Route::get('email', 'logistics_email')->name('email');
        Route::get('zip', 'logistics_zip')->name('zip');
        Route::get('inperson', 'logistics_inperson')->name('inperson');
        Route::get('location', 'logistics_location')->name('location');
        Route::get('neighborhood', 'logistics_neighborhood')->name('neighborhood');
        Route::get('interest', 'logistics_interest')->name('interest');
        Route::get('available', 'logistics_available')->name('available');
        Route::get('fee', 'logistics_fee')->name('fee');
        Route::get('whentostart', 'logistics_whentostart')->name('whentostart');
    });

    Route::prefix('style')->name('style.')->group(function () {
        Route::get('/', 'style_index')->name('index');
        Route::get('therapistrating', 'style_therapistrating')->name('therapistrating');
    });

    Route::prefix('specialities')->name('specialities.')->group(function () {
        Route::get('/', 'specialities_index')->name('index');
        Route::get('group', 'specialities_group')->name('group');
        Route::get('experties', 'specialities_experties')->name('experties');
        Route::get('techniquerequest', 'specialities_techniquerequest')->name('techniquerequest');
        Route::get('technique', 'specialities_technique')->name('technique');
    });

    Route::prefix('priorities')->name('priorities.')->group(function () {
        Route::get('/', 'priorities_index')->name('index');
        Route::get('followuppreference', 'priorities_followuppreference')->name('followuppreference');
        Route::get('mostimportantfactors', 'priorities_mostimportantfactors')->name('mostimportantfactors');
    });
    Route::get('submit', 'submit')->name('submit');
});


Route::controller(BeginController::class)->group(function () {
    Route::prefix('begins')->name('begins.')->group(function () {
        Route::post('gender', 'gender')->name('gender');
        Route::post('lgbtqia', 'lgbtqia')->name('lgbtqia');
        Route::post('age', 'age')->name('age');
        Route::post('ethnicity', 'ethnicity')->name('ethnicity');
    });
});

Route::controller(LogisticsController::class)->group(function () {
    Route::prefix('logistics')->name('logistics.')->group(function () {
        Route::post('about', 'about')->name('about');
        Route::post('email', 'email')->name('email');
        Route::post('zip', 'zip')->name('zip');
        Route::post('inperson', 'inperson')->name('inperson');
        Route::post('location', 'location')->name('location');
        Route::post('neighborhood', 'neighborhood')->name('neighborhood');
        Route::post('interest', 'interest')->name('interest');
        Route::post('available', 'available')->name('available');
        Route::post('fee', 'fee')->name('fee');
        Route::post('whentostart', 'whentostart')->name('whentostart');
    });
});

Route::controller(StyleController::class)->group(function () {
    Route::prefix('style')->name('style.')->group(function () {
        Route::post('therapistrating', 'therapistrating')->name('therapistrating');
    });
});

Route::controller(SpecialitiesController::class)->group(function () {
    Route::prefix('specialities')->name('specialities.')->group(function () {
        Route::post('group', 'group')->name('group');
        Route::post('experties', 'experties')->name('experties');
        Route::post('techniquerequest', 'techniquerequest')->name('techniquerequest');
        Route::post('technique', 'technique')->name('technique');
    });
});

Route::controller(PrioritiesController::class)->group(function () {
    Route::prefix('priorities')->name('priorities.')->group(function () {
        Route::post('followuppreference', 'followuppreference')->name('followuppreference');
        Route::post('submit', 'submit')->name('submit');
    });
});

Route::get('thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::get("/submit", [PrioritiesController::class, 'submit']);

require __DIR__.'/auth.php';
