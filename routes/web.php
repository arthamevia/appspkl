<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\TugasController;
use App\Http\controllers\NilaiController;
use App\Http\controllers\JurusanController;
use App\Http\Controllers\WaliController;


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
    return view('welcome');
});
//templating
Route::get('/hello', function () {
    return view('hello');
});

Auth::routes();
Route::resource('tugas', TugasController::class);
Route::resource('nilai', NilaiController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('wali', WaliController::class);
Route::get('/test-admin', function(){
    return view('layouts.admin');
    
    // Route::resource('siswa', SiswaController::class);
    // Route::resource('pembeli', PembelianController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
