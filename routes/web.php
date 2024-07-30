<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Abstractsubmit;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\RegDataController;
use App\Http\Controllers\subcriptionListController;

use App\Http\Controllers\adminsignController;
use App\Http\Controllers\logController;


Route::get('/', function () {return view('index');});
Route::get('/Home', [pagesController::class, 'home'])->name('home');
Route::get('/Registration', [pagesController::class, 'registration'])->name('Registration');
Route::get('/Abstracts', [pagesController::class, 'abstracts'])->name('Abstracts');
Route::get('/Abstracts-submit',[pagesController::class, 'abstractssub'])->name('Abstracts-submit');
Route::get('/Sponsors', [pagesController::class, 'sponsor'])->name('sponsors');
Route::get('/Hotels & Lodges', [pagesController::class, 'hotels'])->name('hotels');


Route::get('/admin signup', [pagesController::class, 'showSignupForm'])->name('admin-signup');

/*Admin routes */





Route::get('/admin/abstracts', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/abstracts/{id}', [AdminController::class, 'show'])->name('admin.show');
Route::post('/admin/abstracts/mark-as-seen/{id}', [AdminController::class, 'markAsSeen'])->name('admin.markAsSeen');









/*post routes* */
Route::post('/submit-form', [SubscriptionController::class,'submitForm'])->name('submit.form');
Route::post('/register', [RegisterController::class, 'submitRegistration'])->name('regform');
Route::post('/Abstract-Submit', [Abstractsubmit::class, 'abstractsubmit'])->name('Abstract-form');



//Route::get('/registrations', [RegDataController::class, 'index'])->name('registrations.index');

//Route::post('/registrations/approve/{id}', [RegDataController::class, 'approve'])->name('registrations.approve');
//Route::post('/registrations/approve/{id}', [RegDataController::class, 'approve1'])->name('registrations.approve1');


/*Admin Routes*/
Route::get('/admin/abstracts1', [AdminController::class, 'index1'])->name('admin.index1');
Route::get('/Admin-dashboard', [dashboardController::class, 'index'])->name('admin-dashboard');
Route::get('/registrations2', [RegDataController::class, 'index2'])->name('registrations.admin');
Route::get('/Subscriptions', [subcriptionListController::class,'index'])->name('Subscriptions');

Route::post('/subscriptions/approve/{id}', [subcriptionListController::class, 'approve'])->name('subsapprove.approve');
Route::post('/Registration/approve/{id}', [RegisterController::class, 'approve'])->name('registration.approve');
Route::post('/Abstracts/mark/{id}', [AdminController::class, 'mark'])->name('Absracts.mark');

/*log in and sign up routes*/
Route::post('/admin-sign', [adminsignController::class, 'signup'])->name('admin-sign');
Route::get('/log-in', [PagesController::class, 'showlogin'])->name('log-in');

Route::post('/log-in', [logController::class, 'login'])->name('log-in');



