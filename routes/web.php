<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

// Rute-rute lain yang tidak memerlukan otentikasi
Route::get('/public', function () {
    return view('public');
})->name('public');