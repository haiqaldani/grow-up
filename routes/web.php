<?php

use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

            Route::resource('user', 'UserController');
            Route::resource('type-of-immunization', 'TypeOfImmunizationController');
            Route::resource('immunization', 'ImmunizationController');
            Route::resource('medical-record', 'MedicalRecordController');

    });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tambah-anak', [App\Http\Controllers\HomeController::class, 'create'])->name('create-kid');

Auth::routes();

