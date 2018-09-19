<?php

use HeTengJi\Test\Http\Controllers\TestController;

Route::get('test', TestController::class.'@index');