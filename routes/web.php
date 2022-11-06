<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormibuController;

//user
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TabelibuController;
use App\Http\Controllers\Hasilcek1Controller;
use App\Http\Controllers\Hasilcek2Controller;
use App\Http\Controllers\FormbalitaController;
use App\Http\Controllers\ProfiluserController;
//admin
use App\Http\Controllers\ProfileadminnController;
use App\Http\Controllers\FormartikelController;
use App\Http\Controllers\FormvitaminController;
use App\Http\Controllers\KeluhanuserController;
use App\Http\Controllers\TabelbalitaController;
use App\Http\Controllers\CekKehamilanController;
use App\Http\Controllers\CekKesuburanController;
use App\Http\Controllers\KeluhanadminController;
use App\Http\Controllers\KesehatanibuController;
use App\Http\Controllers\TabelvitaminController;
use App\Http\Controllers\DashboardadminController;
use App\Http\Controllers\LaporandataibuController;
use App\Http\Controllers\FormpenimbanganController;
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


Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/user', function () {
    return view('user/user');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

//Login
Route::get('/home', [HomeController::class,'index']);
Route::get('/login', [LoginController::class,'index']);
Route::get('/register', [RegisterController::class,'index']);

//-------------------USER-----------------//
//user cek
Route::get('/hpht', [CekKehamilanController::class,'index']);
Route::get('/hasil', [Hasilcek1Controller::class,'index']);
Route::get('/hasil2', [Hasilcek2Controller::class,'index']);
Route::get('/tlght', [CekKesuburanController::class,'index']);
Route::get('/keluhanuser', [KeluhanuserController::class,'index']);
Route::get('/kesehatanibu', [KesehatanibuController::class, 'index']);
Route::get('/kesehatanbalita',[KesehatanbalitaController::class, 'index']);

//user profile
Route::get('/profiluser', [ProfiluserController::class,'index']);

//-------------------ADMIN-----------------//
Route::get('/admin', [DashboardadminController::class, 'index']);
Route::get('/profileadminn', [ProfileadminnController::class, 'index']);

//admin form
Route::get('/formbalita', [FormbalitaController::class,'index']);
// Route::post('/balita', [  BalitaController::class, 'store']);
// Route::resource('/balita', [  DataAnakController::class, 'store']);
Route::get('/formpenimbangan', [FormpenimbanganController::class, 'index']);
Route::get('/formibu', [FormibuController::class, 'index']);
Route::get('/formvitamin', [FormvitaminController::class, 'index']);
Route::get('/formartikel', [FormartikelController::class, 'index']);
Route::get('/keluhanadmin', [KeluhanadminController::class, 'index']);

//admin laporan
Route::get('/laporandataibu', [LaporandataIbuController::class, 'index']);
Route::get('/laporandatabalita', [LaporandatabalitaController::class, 'index']);
Route::get('/laporanpenimbangan', [LaporanpenimbanganController::class, 'index']);

//admin tabel
Route::get('/tabelbalita', [TabelbalitaController::class, 'index']);
Route::get('/tabelibu', [TabelibuController::class, 'index']);
Route::get('/tabelvitamin', [TabelvitaminController::class, 'index']);

// ->name('balita')
