<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;

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
    return view('halaman_login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::controller(LembagaController::class)->group(function (){
    Route::get('/lembaga','show');
    Route::get('/lembaga/add','add');
    Route::get('/lembaga/create','create');
    Route::get('/lembaga/edit','edit');
    Route::get('/lembaga/update/{id}','update');
    Route::get('/lembaga/delete/{id}','delete');
});

Route::controller(UnitKerjaController::class)->group(function (){
    Route::get('/unit-kerja','show');
    Route::get('/unit-kerja/add','add');
    Route::get('/unit-kerja/create','create');
    Route::get('/unit-kerja/edit','edit');
    Route::get('/unit-kerja/update/{id}','update');
    Route::get('/unit-kerja/delete/{id}','delete');
});

Route::controller(UserController::class)->group(function (){
    Route::get('/user','show');
    Route::get('/user/add','add');
    Route::get('/user/create','create');
    Route::get('/user/edit','edit');
    Route::get('/user/update/{id}','update');
    Route::get('/user/delete/{id}','delete');
});

Route::controller(SuratMasukController::class)->group(function (){
    Route::get('/surat-masuk','show');
    Route::get('/surat-masuk/add','add');
    Route::get('/surat-masuk/create','create');
    Route::get('/surat-masuk/edit','edit');
    Route::get('/surat-masuk/update/{id}','update');
    Route::get('/surat-masuk/delete/{id}','delete');
});

Route::controller(SuratKeluarController::class)->group(function (){
    Route::get('/surat-keluar','show');
    Route::get('/surat-keluar/add','add');
    Route::get('/surat-keluar/create','create');
    Route::get('/surat-keluar/edit','edit');
    Route::get('/surat-keluar/update/{id}','update');
    Route::get('/surat-keluar/delete/{id}','delete');
});

Route::controller(ReportController::class)->group(function (){
    Route::get('/report-sm','showSm');
    Route::get('/report-sk','showSk');
});


