<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\DataController;

use App\Http\Controllers\PublicationController;

use App\Http\Controllers\InvestigatorController;

use App\Http\Controllers\StaffController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/data', [DataController::class, 'index']);

Route::get('/publication', [PublicationController::class, 'index']);

Route::get('/investigators', [InvestigatorController::class, 'index']);

Route::get('/staff', [StaffController::class, 'index']);
