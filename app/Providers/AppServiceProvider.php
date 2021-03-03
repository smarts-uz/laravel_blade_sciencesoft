<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\procedure;
use App\View\Components\wework;
//use App\View\Components\project;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            // return base_path().'/public_http';
            return base_path().'/../public_html';
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Blade::component('project', project::class);
        Blade::component('procedure', procedure::class);
        Blade::component('wework', wework::class);

    }
}
