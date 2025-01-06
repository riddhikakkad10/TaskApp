<?php 

use App\Http\Controllers\TaskController;

Route::middleware('log.api')->group(function () {
    // Create a task
    Route::post('/tasks', [TaskController::class, 'store']);
    
    // Get all tasks
    Route::get('/tasks', [TaskController::class, 'index']);
    
    // Upload a file
    Route::post('/upload', [TaskController::class, 'upload']);
    
    // Simulate a payment gateway
    Route::post('/gateway', [TaskController::class, 'gateway']);
});
