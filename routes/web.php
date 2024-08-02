<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PagesController::class,'welcome'])->name('welcome');

//donorcontroller
Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


});
Route::get('/peoples',[PeopleController::class,'index'])->name('peoples.index');
Route::get('/peoples/home/',[PeopleController::class,'home'])->name('peoples.home');
Route::get('/peoples/create',[PeopleController::class,'create'])->name('peoples.create');
Route::post('/peoples/store',[PeopleController::class,'store'])->name('peoples.store');
Route::get('donors/index/',[RegisteredUserController::class,'index'])->name('donors.index');
Route::get('/donors/show/',[RegisteredUserController::class,'show'])->name('donors.show');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('users/index',[UsersController::class, 'index'])->name('users.index');
Route::get('users/about',[UsersController::class, 'about'])->name('users.about');
Route::get('about',[PagesController::class, 'about'])->name('about');

require __DIR__.'/auth.php';
