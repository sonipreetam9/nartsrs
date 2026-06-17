<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FranchiseeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/optimize', function () {
    // Clear all caches
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

    // Re-optimize the application
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('optimize');

    return '✅ सभी कैश और कॉन्फ़िगरेशन सफलतापूर्वक क्लियर और ऑप्टिमाइज़ कर दिए गए हैं!';
});

Route::fallback(function () {
    return response()->view('404', [], 404);
});

Route::get('/', [IndexController::class, 'Index'])->name('index');
Route::get('/about.html', [AboutController::class, 'AboutIndex'])->name('about');

// ************ Courses Routes ************ //
Route::get('/courses.html', [CourseController::class, 'CourseIndex'])->name('courses');
Route::get('/course/department-of-computer.html', [CourseController::class, 'DepartmentOfComputer'])->name('department.computer');
Route::get('/course/department-of-paramedical.html', [CourseController::class, 'DepartmentOfParamedical'])->name('department.paramedical');
Route::get('/course/department-of-vocational.html', [CourseController::class, 'DepartmentOfVocational'])->name('department.vocational');
Route::get('/course/department-of-fire-safety.html', [CourseController::class, 'DepartmentOfFireSafety'])->name('department.fire-safety');
Route::get('/course/department-of-hardware-networking.html', [CourseController::class, 'DepartmentOfHardwareNetworking'])->name('department.hardware.networking');
Route::get('/course/department-of-management.html', [CourseController::class, 'DepartmentOfManagement'])->name('department.management');
Route::get('/course/department-of-languages.html', [CourseController::class, 'DepartmentOfLanguages'])->name('department.languages');
Route::get('/course/department-of-polytechnic.html', [CourseController::class, 'DepartmentOfPolytechnic'])->name('department.polytechnic');

// ************ Student Routes ************ //
Route::middleware(['student:guest'])->group(function () {
    Route::get('/student-login.html', [StudentController::class, 'StudentLogin'])->name('student.login');
    Route::post('/student-login.html', [StudentController::class, 'StudentLoginPost'])->name('student.login.post');
});
Route::middleware(['student:auth'])->group(function () {
    Route::get('/student-dashboard.html', [StudentController::class, 'StudentDashboard'])->name('student.dashboard');
    Route::get('/student-logout.html', [StudentController::class, 'StudentLogout'])->name('student.logout');
});

// ************ Student Result Routes ************ //
Route::get('/result', [StudentController::class, 'StudentResult'])->name('student.result');
Route::post('/result', [StudentController::class, 'StudentResultPost'])->name('student.result.post');

// ************ Franchisee Routes ************ //
Route::get('/franchisee-registration.html', [FranchiseeController::class, 'FranchiseeIndex'])->name('franchisee.registration');
Route::post('/franchisee-registration.html', [FranchiseeController::class, 'FranchiseeStore'])->name('franchisee.registration.store');
Route::get('/view-franchisee.html', [FranchiseeController::class, 'FranchiseList'])->name('view.franchisee');

Route::get('/training-placement.html', [IndexController::class, 'TraningPlacementIndex'])->name('training.placement');

Route::get('/contact.html', [ContactController::class, 'ContactIndex'])->name('contact');
Route::post('/contact.html', [ContactController::class, 'ContactPost'])->name('contact.form.post');