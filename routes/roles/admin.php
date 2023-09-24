<?php

use App\Http\Controllers\SettingController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ColorController;
use App\Http\Controllers\Backend\AttributeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GlobalSettingsController;
use App\Http\Controllers\Backend\AttrinutePropertyController;

Route::redirect('/admin', '/admin/login');

Route::get('/admin/login', [AdminController::class, 'loginView'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'loginAuth'])->name('admin.login');
Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'displayView'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile');
    Route::post('/admin/password', [AdminController::class, 'updatePassword'])->name('admin.password');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('color', ColorController::class);  // Color  Routes
        Route::resource('attribute', AttributeController::class);  // Attribute Routes
        Route::get('attribute-property/{id}/index', [AttrinutePropertyController::class, 'index'])->name('attribute-property.index');
        Route::post('attribute-property/store', [AttrinutePropertyController::class, 'store'])->name('attribute-property.store');
        Route::get('attribute-property/{id}/edit', [AttrinutePropertyController::class, 'edit'])->name('attribute-property.edit');
        Route::put('attribute-property/{id}/update', [AttrinutePropertyController::class, 'update'])->name('attribute-property.update');
        Route::delete('attribute-property/{id}/destroy', [AttrinutePropertyController::class, 'destroy'])->name('attribute-property.destroy');


        Route::get('global-settings', [GlobalSettingsController::class, 'index'])->name('global-settings');
        Route::post('global-settings/store', [GlobalSettingsController::class, 'store'])->name('global-settings.store');
    });
});
