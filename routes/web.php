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

use App\Http\Controllers\ActivityController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\NaatController;

use App\Http\Controllers\SearchController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/data', [DataController::class, 'index']);

Route::get('/publication', [PublicationController::class, 'index']);

Route::get('/people/investigators', [InvestigatorController::class, 'index']);

Route::get('/people/staff', [StaffController::class, 'index']);

Route::get('/people/collaborator', [CollaboratorController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/capacitybuilding', [CapacityBuildingController::class, 'index']);

Route::get('/capacitybuilding/{slug}', [CapacityBuildingController::class, 'single'])->name('capacitybuilding.single');

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/activity', [ActivityController::class, 'index']);

Route::get('/activity/{slug}', [ActivityController::class, 'single'])->name('activity.single');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/form', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/form', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/contact/thankyou', function () {
    return view('emails.thank-you'); // This should be the view for your thank you page
})->name('contact.thankyou');

Route::get('/products/nepali-accountability-assessment-tool', [NaatController::class, 'index']);

/*serarch controller*/
Route::get('/search', [SearchController::class, 'search'])->name('search');
