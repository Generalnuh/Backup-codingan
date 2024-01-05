<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
   Route::get('/', [HomeController::class, 'index'])->name('home');
   Route::get('/home', [HomeController::class, 'index']);
   Route::resource('jabatan', JabatanController::class);
   Route::resource('pegawai', PegawaiController::class);
});
