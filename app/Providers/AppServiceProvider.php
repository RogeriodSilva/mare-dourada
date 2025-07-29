<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Collection;
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
        View::addNamespace('layouts', base_path('app/View/layouts'));

        View::composer('*', function ($view) {
            $view->with([
                'collections' => Collection::all(),
                'categories' => Category::all()
            ]);
        });
    }
}
