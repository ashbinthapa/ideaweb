<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\HeaderController;

class HeaderServiveProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('partials.header', function ($view) {
            $headerController = new HeaderController(); // Create an instance of the controller
            $formattedDate = $headerController->getLiveDate(); // Call the non-static method
            $view->with('formattedDate', $formattedDate);
        });
    }
}
