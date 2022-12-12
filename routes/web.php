<?php

use App\Models\Keluhanuser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

//user
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\FormibuController;
use App\Http\Controllers\VitaminController;
use App\Http\Controllers\IbuhamilController;
use App\Http\Controllers\RegisterController;
//admin

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Hasilcek1Controller;
use App\Http\Controllers\Hasilcek2Controller;
use App\Http\Controllers\KeluhanuserController;
use App\Http\Controllers\CekKehamilanController;
use App\Http\Controllers\CekKesuburanController;
use App\Http\Controllers\KeluhanadminController;
use App\Http\Controllers\KesehatanibuController;
use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\LaporandataibuController;
use App\Http\Controllers\KesehatanbalitaController;
use App\Http\Controllers\LaporandatabalitaController;
use App\Http\Controllers\LaporanpenimbanganController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});

// ->name('balita')

Route::get('/login', [LoginController::class, 'preLogin'])->name('login');
Route::post('/post_login', [LoginController::class, 'postLogin'])->name('post_login');
Route::get('/register', [LoginController::class, 'preRegister'])->name('register');
Route::post('/post_register', [LoginController::class, 'postRegister'])->name('post_register');
Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');

//-------------------ADMIN-----------------//
Route::middleware(['auth', 'CheckRole:admin'])->group(function() {
    Route::get('/admin', [DashboardadminController::class, 'index']);
    Route::get('/profileadmin', [ProfileadminnController::class, 'index']);

    //admin form balita
    Route::resource('/formbalita',BalitaController::class);
    Route::get('/tabelbalita',[BalitaController::class,'index']);
    Route::get('/formbalita',[BalitaController::class,'index']);
    Route::post('/tabelbalita', [BalitaController::class, 'update']);
    // Route::get('/formbalita',[BalitaController::class,'create']);
    Route::post('/store',[BalitaController::class,'store']);
    Route::put('admin/tabelbalita', [BalitaController::class, 'update']);
    Route::delete('admin/{id}', [BalitaController::class, 'destroy']);

    //form ibuu
    Route::resource('/formibu',IbuhamilController::class);
    Route::get('/tabelibu',[IbuhamilController::class,'index']);
    Route::get('/formibu',[IbuhamilController::class,'index']);
    Route::post('/tabelibu', [IbuhamilController::class, 'update']);
    // Route::get('/formbalita',[BalitaController::class,'create']);
    Route::post('/store',[IbuhamilController::class,'store']);
    Route::put('admin/tabelibu', [IbuhamilController::class, 'update']);
    Route::delete('admin/{id}', [IbuhamilController::class, 'destroy']);

    //form vitamin
    // Route::resource('/formvitamin', [VitaminController::class]);
    Route::get('/tabelvitamin', [VitaminController::class, 'index']);
    Route::get('/formvitamin', [VitaminController::class, 'index']);
    // Route::post('/tabelvitamin', [VitaminController::class, 'update']);
    Route::get('/formvitamin', [VitaminController::class, 'create']);
    Route::post('/formvitamin', [VitaminController::class, 'store']);
    Route::any('admin/tabelvitamin', [VitaminController::class, 'update']);
    Route::post('/store',[VitaminController::class,'store']);
    Route::delete('admin/{id}', [VitaminController::class, 'destroy']);

//     Route::get('vitamin/edit/{id}', 'VitaminController@edit'); //route untuk ke halaman edit data
// Route::post('vitamin/update/{id}', 'VitaminController@update');

    //form keluhan
    Route::get('/keluhanadmin', [KeluhanadminController::class, 'index']);
    Route::get('/keluhan/edit/{id}', [KeluhanadminController::class, 'edit'])->name('keluhan.edit');
    Route::post('/keluhan/update/{id}', [KeluhanadminController::class, 'update'])->name('keluhan.update');
    // Route::delete('admin/{id}', [KeluhanadminController::class, 'destroy']);

    //admin laporan
    Route::get('/laporandataibu', [LaporandataIbuController::class, 'index']);
    // Route::get('/laporandataibu/cetak_pdf','LaporandataIbuController@cetak_pdf');
    Route::get('/laporandatabalita', [LaporandatabalitaController::class, 'index']);
    Route::get('/laporanpenimbangan', [LaporanpenimbanganController::class, 'index']);

    //admin artikel
    Route::get('/tabelartikel', [ArtikelController::class, 'index']);
    Route::get('/formartikel', [ArtikelController::class, 'create']);
    Route::post('/tambahartikel', [ArtikelController::class, 'store']);
    // Route::put('artikelupdate', [ArtikelController::class, 'update']);
    Route::delete('admin/{id}', [ArtikelController::class, 'destroy']);
    Route::any('admin/tabelartikel', [ArtikelController::class, 'update']);

});

//-------------------USER-----------------//
Route::middleware(['auth', 'CheckRole:user'])->group(function() {
    Route::get('/user', function () {
        return view('user/user');
    });
    //user profile
    Route::get('/profiluser', [ProfiluserController::class,'index']);
    //user cek
    Route::get('/kalkulator',[CekKehamilanController::class,'index']);
    Route::get('/kalkulator2',[CekKesuburanController::class,'index']);
    Route::any('/hpht', [Hasilcek1Controller::class,'index']);
    Route::get('/hasil', [Hasilcek1Controller::class,'index']);
    Route::get('/hasil2', [Hasilcek2Controller::class,'index']);
    Route::any('/tlght', [Hasilcek2Controller::class,'index']);
    Route::get('/kesehatanibu', [KesehatanibuController::class, 'index']);
    Route::get('/kesehatanbalita',[KesehatanbalitaController::class, 'index']);

    // Route::get('/balasan', [KeluhanuserController::class,'index']);
    Route::get('/keluhanuser', [KeluhanuserController::class,'index']);
    Route::get('/balasan', [KeluhanuserController::class,'show'])->name('user.balasan');
    Route::post('/keluhan/store', [KeluhanuserController::class, 'store'])->name('keluhan.store');
});

