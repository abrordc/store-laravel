<?php

use Illuminate\Support\Facades\Route;
use Modules\MyUp\Http\Controllers\MyUpController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('myup', MyUpController::class)->names('myup');
});
