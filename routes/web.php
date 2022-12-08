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
Route::get('/cursos', [HomeController::class, 'cursos'])->name('cursos');
Route::get('/freeagents', [HomeController::class, 'freeagents'])->name('freeagents')->middleware('auth');

Route::get('/curriculums', [HomeController::class, 'curriculum'])->name('curriculum');

Route::resource('curriculums', CurriculumController::class)->except(['index']);

Route::resource('posts', PostController::class)->except(['index'])->middleware('auth');

Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');