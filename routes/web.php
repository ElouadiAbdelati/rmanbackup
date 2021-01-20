<?php

use App\Http\Controllers\BackupController;
use App\Http\Controllers\CheckCurrentScnController;
use App\Http\Controllers\DiffrentialBackupController;
use App\Http\Controllers\FullBackupController;
use App\Http\Controllers\IncrementalBackupController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListBackupController;
use App\Http\Controllers\ListBackupTagController;
use App\Http\Controllers\LoginAppController;
use App\Http\Controllers\LogModeController;
use App\Http\Middleware\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

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


Route::get('/logout', [LoginAppController::class, 'logout'])->name('logout');

Route::get('/loginapp', [LoginAppController::class, 'index'])->name('loginApp');
Route::any('/loginForm', [LoginAppController::class, 'login'])->name('loginForm');


Route::get('/', function (Request $request) {
     if($request->session()->get('username')==null){
        $request->session()->put('username', 'none');
        $request->session()->put('password', 'none');
        return redirect('/loginapp');
     }

     return redirect('/listbackups');
});

Route::get('/index', [IndexController::class, 'index'])->name('index');


Route::any('/fullbackup', [FullBackupController::class, 'index'])->name('fullbackup');
Route::any('/fullbackupForm', [FullBackupController::class, 'fullbackup'])->name('fullbackupForm');


Route::any('/listbackups', [ ListBackupController::class, 'index'])->name('listbackups');
Route::any('/listbackupsForm', [ ListBackupController::class, 'listbackups'])->name('listbackupsForm');



Route::any('/incrementalbackup', [ IncrementalBackupController::class, 'index'])->name('incrementalbackup');
Route::any('/incrementalbackupbackupsForm', [ IncrementalBackupController::class, 'incrementalbackup'])->name('incrementalbackupForm');



Route::any('/listbackupsTag', [ ListBackupTagController::class, 'index'])->name('listbackupsTag');
Route::any('/listbackupsTagForm', [ ListBackupTagController::class, 'listbackupsByTag'])->name('listbackupsTagForm');





Route::any('/differentialbackup', [ DiffrentialBackupController::class, 'index'])->name('differentialbackup');
Route::any('/differentialbackupForm', [ DiffrentialBackupController::class, 'differentialbackup'])->name('differentialbackupForm');



Route::any('/checkCurrentScn', [ CheckCurrentScnController::class, 'index'])->name('checkCurrentScn');
Route::any('/checkCurrentScnForm', [ CheckCurrentScnController::class, 'checkCurrentScn'])->name('checkCurrentScnForm');



Route::any('/logmode', [ LogModeController::class, 'index'])->name('logmode');
Route::any('/logmodeForm', [ LogModeController::class, 'logmode'])->name('logmodeForm');

Route::any('/modifylogmode', [ LogModeController::class, 'indexModifyLogMode'])->name('modifylogmode');
Route::any('/modifylogmodeForm', [ LogModeController::class, 'modifylogmode'])->name('modifylogmodeForm');



Route::any('/delete', [BackupController::class, 'delete'])->name('delete');
Route::any('/delete_all', [BackupController::class, 'deleteAll'])->name('delete_all');


Route::any('/deletebackupbynumber', [ BackupController::class, 'indexDeleteByNumber'])->name('deletebackupbynumber');
Route::any('/deletebackupbynumberForm', [ BackupController::class, 'deleteByNumber'])->name('deletebackupbynumberForm');
