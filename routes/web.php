<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VikobasController;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

route::get('/adminpost', [HomeController::class, 'adminpost'])->middleware(['auth', 'admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('/admin/adminadduser', [UsersController::class, 'adduser'])->name('add');

Route::post('/admin/store',[UsersController::class, 'store']);

Route::post('/admin/adminviewuser/{user}/update',[UsersController::class, 'update']);

Route::get('/admin/adminviewuser/{user}/destroy',[UsersController::class, 'destroy']);

Route::get('/admin/adminviewuser',[UsersController::class, 'index']);

Route::get('/user/addhisa',[UsersController::class, 'indexv']);

route::post('/user/adddhisa',[VikobasController::class, 'addHisa'])->name('add-hisa');

route::get('/admin/vikobas',[VikobasController::class, 'vikobas'])->name('admin-vikoba');

route::get('/user/myvikobas',[VikobasController::class, 'myvikobas'])->name('view-vikoba');

// Route::get('/vikoba/edit/{id}', 'VikobaController@editForm')->name('vikoba.edit');
Route::get('/vikoba/edit/{id}',[VikobasController::class, 'editForm'])->name('vikoba.edit');

Route::post('/vikoba/update/{id}',[VikobasController::class, 'update'])->name('vikoba.update');

Route::delete('/vikoba/delete/{id}',[VikobasController::class, 'delete'])->name('vikoba.delete');

// Route::delete('/vikoba/delete/{id}', 'VikobaController@delete')->name('vikoba.delete');

// Route::put('/vikoba/update/{id}', 'VikobaController@update')->name('vikoba.update');

