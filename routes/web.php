<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewcarController;
use App\Http\Controllers\VisitorAuthController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/new/cars',[HomeController::class,'newCar'])->name('new-cars');
Route::get('/brands',[HomeController::class,'brands'])->name('brands');
Route::get('/feature',[HomeController::class,'featured'])->name('featured');

Route::get('/visitor/login',[VisitorAuthController::class,'visitorLogin'])->name('visitor.login');
Route::post('/visitor/login',[VisitorAuthController::class,'visitorLoginCheck'])->name('visitor.login');
Route::get('/visitor/signup',[VisitorAuthController::class,'signupView'])->name('visitor.signup');
Route::post('/visitor/store',[VisitorAuthController::class,'signStore'])->name('visitor.store');
Route::get('/visitor/logout',[VisitorAuthController::class,'logout'])->name('visitor.logout');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resources(['categories'=>CategoryController::class]);
    Route::resources(['blogs'=>BlogController::class]);
    Route::resources(['newcars'=>NewcarController::class]);
});
