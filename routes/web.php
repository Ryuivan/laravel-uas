<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

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
    return view('index', [
        "title" => "Home",
    ]);
});

Route::get('/gallery', function() {
    return view('gallery', [
        "title" => "Gallery",
    ]);
});

Route::get('/visi-misi', function() {
    return view('visimisi', [
        "title" => "Visi dan Misi",
    ]);
});

Route::get('/fasilitas', function() {
    return view('fasilitas', [
        "title" => "Fasilitas",
    ]);
});

Route::get('/peraturan', function() {
    return view('peraturan', [
        "title" => "Peraturan",
    ]);
});

Route::get('/akuntansi', function() {
    return view('akuntansi', [
        "title" => "Akuntansi",
    ]);
});

Route::get('/multimedia', function() {
    return view('multimedia', [
        "title" => "Multimedia",
    ]);
});

Route::get('/ekstrakulikuler', function(){
    return view('ekstrakulikuler', [
        "title" => "Ekstrakulikuler",
    ]);
});

Route::get('/osis', function(){
    return view('osis', [
        "title" => "OSIS",
    ]);
});

Route::get('/prestasi', function(){
    return view('prestasi', [
        "title" => "Prestasi",
    ]);
});

Route::get('/login', function() {
    return view('auth.login', [
        "title" => "Login",
    ]);
})->name('login');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register')->middleware(['guest']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard",
    ]);
})->middleware(['auth', 'admin'])->name('dashboard');

Route::resource('/dashboard/posts', PostController::class)->middleware(['auth', 'admin']);
Route::resource('/dashboard/categories', CategoryController::class)->middleware(['auth', 'admin']);
Route::resource('/dashboard/users', UserController::class)->middleware(['auth', 'admin']);
Route::resource('/dashboard/subjects', SubjectController::class)->middleware(['auth', 'admin']);
Route::resource('/dashboard/teachers', TeacherController::class)->middleware(['auth', 'admin']);