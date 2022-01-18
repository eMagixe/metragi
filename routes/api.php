<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApartmentsController;
use App\Http\Controllers\Api\v1\MortgageController;
use App\Http\Controllers\Api\v1\ImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('apartments/filter', [ApartmentsController::class, 'filter'])->name('apartments.filter');
Route::post('mortgage/create', [MortgageController::class, 'store'])->name('mortgage.create');
Route::post('image/upload', [ImageController::class, 'upload'])->name('image.upload');
Route::resource('apartments', ApartmentsController::class);

