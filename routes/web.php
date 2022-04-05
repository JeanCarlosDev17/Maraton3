<?php

use App\Http\Controllers\Api\ToDoController;
use App\Http\Controllers\ImportReportController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::post('/import', [ToDoController::class, 'import'])->name('import');
Route::get('/export', [ToDoController::class, 'export'])->name('export');
Route::get('/pdf', [ToDoController::class, 'pdf'])->name('pdf');
Route::get('/importReports', [ImportReportController::class, 'index'])->name('imports.index');