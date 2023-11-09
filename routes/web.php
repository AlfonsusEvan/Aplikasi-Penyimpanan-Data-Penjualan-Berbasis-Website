<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;
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
    return view('Main.main',[
        "tittle" => "Home"
    ]);
});


//Route Profil
Route::get('/profil',[UserController::class, 'profil_user'])->name('profil')->middleware('auth');

//Route Login
Route::get('/login',[UserController::class, 'login_index'])->name('login');
Route::post('/login',[UserController::class, 'authenticate'])->name('authenticate');

//Route Register
Route::get('/register',[UserController::class, 'register_index'])->name('register');
Route::post('/register',[UserController::class, 'register_store'])->name('register.store');

//Route Logout
Route::get('logout', [UserController::class, 'logout'])->name('logout');

//Halaman Dashboard
Route::get('/dashboard', [CrudController::class, 'show'])->name('show')->middleware('auth');

//Halaman Detail
Route::get('detail/{id}', [CrudController::class, 'detail'])->name('detail')->middleware('auth');

//Add Data
Route::post('/addData', [CrudController::class, 'store'])->name('store')->middleware('auth');
Route::get('/addData', [CrudController::class, 'index'])->name('addData')->middleware('auth');

//Halaman Update
Route::get('edit/{id}', [CrudController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('update/{id}', [CrudController::class, 'update'])->name('update')->middleware('auth');

//Delete
Route::get('/delete/{id}', [CrudController::class, 'delete'])->name('delete');


