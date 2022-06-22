<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Controller 

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
Auth::routes(['verify'=> true]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Verif & Decline
Route::get('/admin/verifikasi', [AdminController::class, 'index'])->name('verifikasi');
Route::get('/admin/verifikasi/belum', [AdminController::class, 'notverifikasi'])->name('not.verifikasi');
Route::get('/admin/verifikasi/acc', [AdminController::class, 'acc'])->name('verifikasi.acc');
Route::get('/admin/verifikasi/dec', [AdminController::class, 'dec'])->name('verifikasi.dec');
//download
Route::get('files/{l}/download', [AdminController::class, 'download'])->name('download');
Route::get('files/{l}/payments.download', [AdminController::class, 'paymentdownload'])->name('payment.download');
//verifikasi & decline
Route::get('admin/verifikasi/{id}', [AdminController::class, 'verifikasi'])->name('verifikasi.save');
Route::get('admin/verifikasi/tolak/{id}', [AdminController::class, 'tolak'])->name('verifikasi.tolak');
Route::get('admin/payments/verifikasi/{id}', [AdminController::class, 'payment_acc'])->name('payment.verifikasi.save');
Route::get('admin/payments/verifikasi/tolak/{id}', [AdminController::class, 'payment_dec'])->name('payment.verifikasi.tolak');

Route::get('admin/rekening', [AdminController::class, 'rekening'])->name('rekening');
Route::get('admin/rekening/add', [AdminController::class, 'addrekening'])->name('rekening.add');
Route::post('admin/rekening/add/save', [AdminController::class, 'insert'])->name('rekening.save');
Route::get('admin/rekening/delete/{id}', [AdminController::class, 'delete'])->name('rekening.delete');

// Payment

Route::get('/admin/payment', [AdminController::class, 'payment'])->name('payments');

// User
Route::group(['middleware' => ['auth', 'verified', 'role:user']], function () {
    Route::get('/user', [function () {
        return 'aaa';
    }]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/upload', [UploadController::class, 'index'])->name('upload');
    Route::post('/upload/save', [UploadController::class, 'save'])->name('upload.save');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/payment', [UserController::class, 'payment'])->name('payment');
    Route::post('/payment/save', [UploadController::class, 'bukti'])->name('bukti.save');});
