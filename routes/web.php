<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\DataController;

use App\Http\Controllers\PublicationController;

use App\Http\Controllers\InvestigatorController;

use App\Http\Controllers\StaffController;

use App\Http\Controllers\CollaboratorController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\CapacityBuildingController;

use App\Http\Controllers\GalleryController;

use App\Http\Controllers\ActivitiesController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/data', [DataController::class, 'index']);

Route::get('/publication', [PublicationController::class, 'index']);

Route::get('/investigators', [InvestigatorController::class, 'index']);

Route::get('/staff', [StaffController::class, 'index']);

Route::get('/collaborator', [CollaboratorController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/capacitybuilding', [CapacityBuildingController::class, 'index']);

Route::get('/capacitybuilding-single', [CapacityBuildingController::class, 'single']);

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/activity', [ActivitiesController::class, 'index']);

Route::get('/activity-single', [ActivitiesController::class, 'single']);
