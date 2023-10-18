<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\MahasiswaController;
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

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/mahasiswa',[MahasiswaController::class, 'index']);
    Route::get('/dashboard/mahasiswa/tambah',[MahasiswaController::class, 'create']);
    Route::post('/dashboard/mahasiswa/store', [MahasiswaController::class,'store']);
    Route::get('/dashboard/mahasiswa/edit/{id}', [MahasiswaController::class,'show']);
    Route::post('/dashboard/mahasiswa/update', [MahasiswaController::class,'update']);
    Route::get('/dashboard/mahasiswa/hapus/{id}',[MahasiswaController::class, 'destroy']);
});
// Route::get('/dashboard/mahasiswa',[MahasiswaController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/mahasiswa/tambah',[MahasiswaController::class, 'create'])->middleware('auth');
// Route::post('/dashboard/mahasiswa/store', [MahasiswaController::class,'store'])->middleware('auth');
// Route::get('/dashboard/mahasiswa/edit/{id}', [MahasiswaController::class,'show'])->middleware('auth');
// Route::post('/dashboard/mahasiswa/update', [MahasiswaController::class,'update'])->middleware('auth');
// Route::get('/dashboard/mahasiswa/hapus/{id}',[MahasiswaController::class, 'destroy'])->middleware('auth');