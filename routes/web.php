<?php

use App\Http\Controllers\BeritaController;
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
Route::get('/news', [BeritaController::class, 'index']);
Route::get('/news/newsPost:slug', [BeritaController::class, 'show']);
