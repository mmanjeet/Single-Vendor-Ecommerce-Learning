<?php
Route::middleware(['auth', 'role:Seller'])->group(function () {
    Route::get('/seller/dashboard', function () {
        echo "<h1>Welcome to vendor</h1>";
    })->name('seller.dashboard');
});
