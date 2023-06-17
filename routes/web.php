<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\PurchasController;
use App\Http\Controllers\MainController;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/mydashboard',[MainController::class,'index']); 
        Route::resource('/categories', CategoryController::class); 
        Route::resource('/doctors', DoctorController::class); 
        Route::resource('/patients', PatientController::class); 
        Route::resource('/drugs', DrugController::class); 
        Route::resource('/sells', SellController::class); 
        Route::resource('/purchases', PurchasController::class); 
    });
   
    
});
Route::view('/','auth.login');

require __DIR__.'/auth.php';
