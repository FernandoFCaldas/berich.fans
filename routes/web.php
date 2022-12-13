<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CurriculumController;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/vagas', [HomeController::class, 'cursos'])->name('cursos');
Route::resource('posts', PostController::class)->except(['index']);


Route::middleware(['client'])->group(function () { 
    Route::get('/curriculums', [HomeController::class, 'curriculum'])->name('curriculum');
    Route::get('/faleconosco', [HomeController::class, 'contactus'])->name('contactus');
    Route::get('/cadastrorecrutador', [HomeController::class, 'recruiter'])->name('recruiter');
    Route::resource('curriculums', CurriculumController::class)->except(['index']);
});

Route::middleware(['recruiter'])->group(function () { 
    Route::get('/freeagents', [HomeController::class, 'freeagents'])->name('freeagents');
    Route::get('/vagas/create', [HomeController::class, 'createJob'])->name('createJob');
});

Route::middleware(['admin'])->group(function () {
    
});

Route::match (['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');