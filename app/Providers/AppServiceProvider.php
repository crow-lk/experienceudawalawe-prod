<?php

namespace App\Providers;

use App\Models\Experience;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share experiences data with header partials
        View::composer([
            'partials.header',
            'partials.header-standard',
            'partials.nav-overlay'
        ], function ($view) {
            $experiences = Experience::published()
                ->ordered()
                ->select('id', 'title', 'slug', 'category')
                ->get();
            
            $view->with('headerExperiences', $experiences);
        });
    }
}
