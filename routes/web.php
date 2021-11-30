<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
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
    return view('home');
});
Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login');
Route::get('register', [RegistrationController::class, 'create'])->name('register');
Route::post('register', [RegistrationController::class, 'store']); // bisa tetap pake route karena pad form menggunakan method post

Route::get('/about', function () {
    return view(
        'about',
        [
            'nama' => 'muhamad rifki',
            'email' => 'muhammadrifki967@gmail.com'
        ]
    );
});
Route::get('/news', [BeritaController::class, 'index'])->name('news');
Route::get('/news/newsPost:slug', [BeritaController::class, 'show']);
