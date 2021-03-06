<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
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
Route::get('/news/{berita:slug}', [BeritaController::class, 'show']);

Route::middleware('guest')->group(function(){
    Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
    Route::post('login', [LoginController::class, 'store']);

    Route::get('register', [RegistrationController::class, 'create'])->name('register');//bisa menggunakan->middleware('guest') setelah nama
    Route::post('register', [RegistrationController::class, 'store']); // bisa tetap pake route karena pad form menggunakan method post
});
Route::middleware('auth')->group(function(){
    Route::post('logout',LogoutController::class)->name('logout');
    Route::get('dashboard',[DashboardController::class,'create'])->name('dashboard');

    Route::get('berita',[PostController::class,'index'])->name('berita');
    Route::get('berita/create',[PostController::class,'create'])->name('berita.create');
    Route::post('berita/create',[PostController::class,'store'])->name('berita.store');
    Route::get('berita/{berita:slug}',[PostController::class,'show']);

    Route::get('berita/{berita:slug}/edit',[PostController::class,'edit'])->name('berita.edit');
    Route::put('berita/{berita:slug}/edit',[PostController::class,'update']);

    Route::delete('berita/{id}/delete',[PostController::class,'destroy'])->name('berita.destroy');
    Route::get('berita/create/check',[PostController::class,'checkSlug'])->name('berita.check');

    Route::get('/category',[CategoryController::class,'index'])->name('cat.index');
});

