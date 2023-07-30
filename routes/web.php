<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminJobCategoryController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\AdminLocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

Route::get("/",[HomeController::class,"index"])->name("home");

Route::get("jobs/{id}/{slug}",[HomeController::class,"job"])->name("home.job");

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('lang/change', [LanguageController::class, 'change'])->name('lang.change');

Route::middleware(["auth"])->group(function () {

    Route::prefix("admin")->name("admin.")->group(function(){
        Route::get("",[AdminDashboardController::class,"index"])->name("dashboard.index");

        Route::resource("locations",AdminLocationController::class);

        Route::resource("categories",AdminJobCategoryController::class);

        Route::resource("jobs",AdminJobController::class);
    });
});
