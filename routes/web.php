<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;
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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/sendmail', [HomeController::class, 'send'])->name('send');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::resource('employee', EmployeeController::class);
    Route::resource('company', CompanyController::class);
    Route::get('admin-user',[AdminController::class,'user'])->name('user');
    Route::get('/change-language/{lang}', [HomeController::class, 'changeLang']);
    // Route::delete('admin-user-delete/{id}',[AdminController::class,'userDelete'])->name('user_delete');
    // Route::resource('patient', PatientController::class);
});
