<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

// importing routes
Route::get('/admin/import', [AdminController::class, 'view_import'])->name('admin.import.view');
Route::post('/admin/import', [AdminController::class, 'import'])->name('admin.import');

// exporting routes
Route::get('/admin/export', [AdminController::class, 'view_export'])->name('admin.export.view');
Route::post('/admin/export', [AdminController::class, 'export'])->name('admin.export');


// Route::get('/', function () {
//     return view('welcome');
// });
