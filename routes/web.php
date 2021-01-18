<?php

use App\Http\Controllers\BackupController;
use App\Http\Controllers\FullBackupController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListBackupController;
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
    return view('welcome');
});

Route::get('/test', [BackupController::class, 'test']);

Route::get('/index', [IndexController::class, 'index'])->name('index');


Route::any('/fullbackup', [FullBackupController::class, 'index'])->name('fullbackup');
Route::any('/fullbackupForm', [FullBackupController::class, 'fullbackup'])->name('fullbackupForm');


Route::any('/listbackups', [ ListBackupController::class, 'index'])->name('listbackups');
Route::any('/listbackupsForm', [ ListBackupController::class, 'listbackups'])->name('listbackupsForm');

