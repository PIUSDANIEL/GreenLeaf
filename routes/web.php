<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Medical\MedicalController;
use App\Http\Controllers\Specialist\SpecialistController;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserLogoutController;
use App\Http\Controllers\User\UserRegisterController;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminLogin;
use App\Http\Livewire\Admin\AdminSpecialistEdit;
use App\Http\Livewire\Admin\AdminUserEdit;
use App\Http\Livewire\Home\Homecomponent;
use App\Http\Livewire\Medical\Cardiologist;
use App\Http\Livewire\Medical\Dentist;
use App\Http\Livewire\Medical\Dermatologist;
use App\Http\Livewire\Medical\Doctor;
use App\Http\Livewire\Medical\Emergency;
use App\Http\Livewire\Medical\Gynaecologist;
use App\Http\Livewire\Medical\MedicalProfile;
use App\Http\Livewire\Medical\Ophthalmologist;
use App\Http\Livewire\Medical\Otolaryngologist;
use App\Http\Livewire\Medical\Pharmacy;
use App\Http\Livewire\Medical\Spa;
use App\Http\Livewire\Specialist\SpecialistDashboard;
use App\Http\Livewire\Specialist\SpecialistEditProfile;
use App\Http\Livewire\Specialist\SpecialistLogin;
use App\Http\Livewire\Specialist\SpecialistRegister;
use App\Http\Livewire\Specialist\SpecialistProfile;
use App\Http\Livewire\User\UserComponentLogin;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\User\UserRegister;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', Homecomponent::class)->name('/');


Route::middleware('userrestrict')->group(function () {
Route::get('/specialistprofile/{id}', [SpecialistController::class, 'specialistprofile']);


Route::get('/doctors/{specialistids}', MedicalProfile::class);

});




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USER
Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web'])->group(function () {

        Route::get('/register', UserRegister::class)->middleware('userprotect')->name('register');
        Route::get('login', UserComponentLogin::class)->middleware('userprotect')->name('login');

        Route::post('/user_login',[UserLoginController::class,'login'])->name('user_login');
        Route::post('/user_reg',[UserRegisterController::class,'register'])->name('user_reg');
    });



    Route::middleware(['auth:web'])->group(function () {
        Route::post('/edit_profile', [UserRegisterController::class,"edit_profile"])->name('edit_profile');
        Route::post('/password_change', [UserRegisterController::class,"password_change"])->name('password_change');
        Route::post('/logout',[UserLogoutController::class,'logout'])->name('logout');
        Route::get('/dashboard', UserDashboard::class)->name('dashboard');
        Route::view('home', 'user')->name('home');
        Route::post('/edit_profile_image', [UserRegisterController::class,"edit_profile_image"])->name('edit_profile_image');
        Route::get('/getedit_profile/{id}',[UserRegisterController::class, 'getedit_profile'])->name('getedit_profile');
        Route::post('/review',[MedicalController::class,'review'])->name('review');
    });

});





//ADMIN
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin'])->group(function () {

        //Route::get('/regist', SpecialistRegister::class)->name('register');
        Route::get('/login', AdminLogin::class)->name('login')->middleware('userprotect');

        Route::post('/admin_login',[AdminController::class,'login'])->name('admin_login');
        //Route::post('/user_reg',[UserRegisterController::class,'register'])->name('user_reg');
    });



    Route::middleware(['auth:admin'])->group(function () {
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        Route::post('/edit_profile', [AdminController::class,"edit_profile"])->name('edit_profile');
        Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
        Route::get('/user_edit', AdminUserEdit::class)->name('user_edit');
        Route::get('/specialist_edit', AdminSpecialistEdit::class)->name('specialist_edit');
       // Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
       Route::post('/edit_profile_image', [AdminController::class,"edit_profile_image"])->name('edit_profile_image');

    });

});


//specialist

Route::prefix('specialist')->name('specialist.')->group(function () {

    Route::middleware(['guest:specialist'])->group(function () {

        Route::get('/register', SpecialistRegister::class)->middleware('userprotect')->name('register');
        Route::get('/login', SpecialistLogin::class)->middleware('userprotect')->name('login');

        Route::post('/specialist_login',[SpecialistController::class,'login'])->name('specialist_login');
        Route::post('/specialist_register',[SpecialistController::class,'register'])->name('specialist_register');
    });



    Route::middleware(['auth:specialist'])->group(function () {
        Route::post('/logout',[SpecialistController::class,'logout'])->name('logout');
        Route::get('/dashboard', SpecialistDashboard::class)->name('dashboard');
       Route::post('/edit_profile', [SpecialistController::class,"edit_profile"])->name('edit_profile');
       Route::post('/edit_profile_image', [SpecialistController::class,"edit_profile_image"])->name('edit_profile_image');
       Route::post('/password_change', [SpecialistController::class,"password_change"])->name('password_change');
        Route::view('/home', 'specialist')->name('home');
        Route::put('/office',[SpecialistController::class,'office'])->name('office');
        Route::get('/getedit_profile/{id}',[SpecialistController::class, 'getedit_profile'])->name('getedit_profile');

    });

});

