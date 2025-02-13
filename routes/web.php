<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;

use App\Htpp\Controllers\Barangcontroller;
use App\Htpp\Controllers\Kasircontroller;
use App\Htpp\Controllers\Kategoricontroller;
use App\Htpp\Controllers\Transaksicontroller;
use App\Htpp\Controllers\Pelanggancontroller;
use App\Htpp\Controllers\Suplliercontroller;


/*|
--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//GUEST ( SEBELUM LOGIN)
Route::middleware(['guest:kasir'])->group(function () {
    Route::get('/kasir', function(){return view('auth.loginkasir'); })->name('loginkasir');
    Route::post('/loginkasir', [Authcontroller::class, 'login']);
});


Route::middleware(['guest:admin'])->group(function (){
    Route::get('/admin', function(){return view('auth.loginadmin'); })->name('loginadmin');
    Route::get('/loginadmin', [Authcontroller::class, 'loginadmin']);
});


//AUTH(SEBE3LUM LOGIN)
Route::middleware(['auth:kasir'])->group(function (){
     Route::get('kasir/dashboard', [DashboardKasirController::class, 'dashboard']);
     Route::get('kasir/logout', [AuthController::class, 'logoutkasir']);

});

Route::middleware(['auth:admin'])->group(function (){

    Route::get('admin/dashboard', [DashboardAdminController::class, 'dashboard']);
    Route::get('admin/logout', [AuthController::class, 'logoutadmin']);

   // Route::resource('admin', BarangController::class);
   // Route::resource('kasir', kasircontroller::class);
   // Route::resource('kategori', Kategoricontroller::class);
   // Route::resource('transaksi', Transaksicontroller::class);
   // Route::resource('pelanggan', Pelanggancontroller::class);

});

