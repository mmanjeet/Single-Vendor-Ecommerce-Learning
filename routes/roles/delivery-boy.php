<?php
Route::middleware(['auth', 'role:Delivery Boy'])->group(function () {
    Route::get('/delivery/dashboard', function () {
        echo "<h1>Welcome to delivery boy</h1>";
    })->name('delivery.dashboard');
});
