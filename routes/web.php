<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenumpangController;

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

Route::get('/', function () {
    return view('home');
});

// add route group for kereta
Route::group(['prefix' => '/kereta'],
    function () {
        Route::get('/all',[KeretaController::class, 'index']);
    }
);

// add route group for penumpang
Route::group(['prefix' => '/penumpang'],
    function () {
        Route::get('/all',[PenumpangController::class, 'index']);

    }
);