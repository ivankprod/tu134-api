<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return abort(404, 'Not found');
});
