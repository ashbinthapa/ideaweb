<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\HeaderController;
use App\Models\Activity;
use Carbon\Carbon;


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
            $posts_all = Activity::all(); // Fetch all activities
            $formattedDate = Carbon::now()->format('l, F j, Y'); // Get the current formatted date

            $view->with('data', ['posts_all' => $posts_all])
                ->with('formattedDate', $formattedDate);
        });

        View::composer('partials.right-widget', function ($view) {
            $posts_all = Activity::all(); // Fetch all activities

            $view->with('data', ['posts_all' => $posts_all]);
        });

        View::composer('partials.footer', function ($view) {
            $posts_all = Activity::latest()->take(5)->get(); // Fetch the latest 5 activities

            $view->with('data', ['posts_all' => $posts_all]);
        });
    }
}
