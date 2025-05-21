<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
	Route::get('/test', [TestController::class, 'index'])->name('test');
});
