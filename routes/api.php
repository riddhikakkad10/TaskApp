<?php 

use App\Http\Controllers\TaskController;

Route::middleware('log.api')->group(function () {
    Route::post('/tasks', [TaskController::class, 'store']);
    Route::get('/tasks', [TaskController::class, 'index']);
    Route::post('/upload', [TaskController::class, 'upload']);
    Route::post('/gateway', [TaskController::class, 'gateway']);
});

?>
