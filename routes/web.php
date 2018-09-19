<?php

use HeTengJi\Cc\Http\Controllers\CcController;

Route::get('cc', CcController::class.'@index');
Route::get('cc/create', CcController::class.'@create');
