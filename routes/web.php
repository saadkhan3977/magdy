<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HowItWorkController;
use App\Http\Controllers\ContactUsController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Travelar\DashboardController as Travelar_dashboard;
use App\Http\Controllers\Shopper\DashboardController as Shopper_dashboard;
use App\Http\Controllers\Shopper\TravelarsController as ontravels_Travelars;

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
        return view('welcome');
    });

    Route::get("/about",[AboutController::class,"index"])->name("about");
    Route::get("/how_it_work",[HowItWorkController::class,"index"])->name("howitwork");
    Route::get("/contactus",[ContactUsController::class,"index"])->name("contactus");
    
    Auth::routes(['verify' => false]);
    Route::get("/register/{for?}",[RegisterController::class,'showRegistrationForm'])->name("register");
    Route::get('logout', [LoginController::class, 'logout']);
    Route::get('account/verify/{token}', [LoginController::class, 'verifyAccount'])->name('user.verify'); 

    
    Route::group(['middleware' => ['auth']], function(){



        // verification
        Route::get("/verification",[VerificationController::class,"index"])->name("verification");
        Route::POST("/send_otp",[VerificationController::class,"send_otp"])->name("send_otp");
        Route::POST("/verify_otp",[VerificationController::class,"verify_otp"])->name("verify_otp");
        Route::POST("/send_mail",[VerificationController::class,"send_mail"])->name("send_mail");
        Route::POST("/verify_email",[VerificationController::class,"verify_email"])->name("verify_email");

        Route::resource('setup_profile', ProfileController::class);




        
        Route::group(['middleware' => ['role_redirection']], function(){
            Route::get('/change_password', [DashboardController::class, 'change_password'])->name('change_password');
            Route::post('/store_change_password', [DashboardController::class, 'store_change_password'])->name('store_change_password');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
            Route::resource('roles', RoleController::class);
            Route::resource('permission', PermissionController::class);
            Route::resource('users', UserController::class);
        });
           
        Route::get('/travelar/dashboard', [Travelar_dashboard::class, 'index'])->name('travelar-dashboard');
       

        Route::get('/shopper/dashboard', [Shopper_dashboard::class, 'index'])->name('shopper-dashboard');
        Route::get('/travelars-list', [ontravels_Travelars::class, 'index'])->name('travelar-list');
        
        
    }); 