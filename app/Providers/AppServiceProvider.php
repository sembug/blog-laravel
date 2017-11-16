<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('_categories_list', function ($view){
            $categories = \App\Category::all();

            $view->with('categories', $categories);
        });

        view()->composer('_tags_list', function($view){
            $tags = \App\Tag::all();

            $view->with('tags', $tags);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
