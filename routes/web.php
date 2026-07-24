<?php

use App\Helpers\Slug;
use App\Http\Controllers\Applicant\HomeController as ApplicantHomeController;
use App\Http\Controllers\Applicant\JobController as ApplicantJobController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Employer\AccountController;
use App\Http\Controllers\Employer\CompanyController;
use App\Http\Controllers\Employer\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Employer\HomeController as EmployerHomeController;

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
    return redirect()->route('home');
});

Route::get('home', array(HomeController::class, 'index'))->name('home');

Route::group(array('middleware' => array('guest')), function() {
    Route::post('signup', array(SignUpController::class, 'store'))->name('signup');
    Route::post('login', array(LoginController::class, 'login'))->name('login');
});

Route::group(array('middleware' => array('auth')), function() {


    Route::group(array('prefix' => 'employer'), function() {
        Route::get('/', array(EmployerHomeController::class, 'index'))->name('employer.index');
        Route::get('manage-job', array(JobController::class, 'index'))->name('employer.job.index');
        Route::get('job-list', array(JobController::class, 'joblist'))->name('employer.job.list');
        Route::get('post-job', array(JobController::class, 'create'))->name('employer.job.create');
        Route::post('post-job/save', array(JobController::class, 'store'))->name('employer.job.store');

        Route::get('account/profile', array(AccountController::class, 'profile'))->name('employer.profile.index');
        Route::get('getcompanies', array(CompanyController::class, 'getcompanies'))->name('employer.getcompanies');
        Route::post('selectcompany', array(CompanyController::class, 'selectcompany'))->name('employer.selectcompany');
    });

    Route::group(array('prefix' => 'applicant'), function() {
        Route::get('/', array(ApplicantHomeController::class, 'index'))->name('applicant.index');
        Route::get('/job', array(ApplicantJobController::class, 'index'))->name('applicant.job.index');
        Route::get('/job/{uuid}', array(ApplicantJobController::class, 'view'))->name('applicant.job.view');
    });

    Route::get('account/profile/getcompany', array(CompanyController::class, 'getcurrentcompany'))->name('getcurrentcompany');
    Route::post('logout', array(LogoutController::class, 'logout'))->name('logout');
});

Route::get('logout2', function() {
    Auth::logout();
});



