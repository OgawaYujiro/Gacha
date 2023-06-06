<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsvDownloadController;
use App\Http\Controllers\CsvUploadController;

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

Route::get('/csvdl', [CsvDownloadController::class, 'downloadCSV']);
Route::get('/csv', [CsvUploadController::class, 'index'])->name('csv.index');
Route::post('/csv/finish/',[CsvUploadController::class,'finish'])->name('csv.finish');