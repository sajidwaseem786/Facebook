<?php

namespace imranrbx\Facebook;

use Illuminate\Support\ServiceProvider;
// use imranrbx\Facebook\Facades\Facebook;
use imranrbx\Facebook\Library\Facebook;
class FacebookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
        public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__."/routes.php");//load routes from same directory and from routes.php
        $this->publishes([
            
        __DIR__.'/Config/facebook.php'=>config_path('facebook.php'),

            ]);

        $this->loadViewsFrom(__DIR__."/Views","fbp"); 
       
       $this->publishes([//for copy past like
        __DIR__.'/Views'=>resource_path('views/vendor/fbp'),
    ]);

    }



    public function register()
    {
        //
        $this->app->bind('fbm',function($app){//agr koe functionality app sy lana chahy tu ya fun attach kia

           return new Facebook(config('facebook.fb'));



        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */

}
