<?php

namespace IntoTheSource\Faq;

/**
 * @package Entrance
 * @author David Bikanov <dbikanov@intothesource.com> and Douwe de Haan <ddehaan@intothesource.com>
 */
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class FaqServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     * 
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(realpath(__DIR__.'/views'), 'faq');
        $this->setupRoutes();
        // this  for conig
                $this->publishes([
                        __DIR__.'/config/faq.php' => config_path('faq.php'),
                        __DIR__.'/database/migrations' => database_path('migrations'),
                        __DIR__.'/database/seeds' => database_path('seeds'),
                        //__DIR__.'/models' => app_path(),
                        //__DIR__.'/views/emails' => base_path('resources/views/intothesource/entrance/emails'),
                        //__DIR__.'/views/pages' => base_path('resources/views/intothesource/entrance/pages'),
                        //__DIR__.'/Http/Controllers' => app_path('Http/Controllers/Intothesource/Entrance'),

                ]);



    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes()
    {
        $routesFile = app_path().'/Http/routes.php';

        $currentRoutes = file_get_contents($routesFile);

        if(strstr($currentRoutes,"FAQ ROUTES") == false){
            $token = '';
            $routes = "\n //FAQ ROUTES \n

    Route::get('faq', ['as' => 'faq.index', 'uses' => config('faq.classes.faq_controller').'@index']);
    Route::get('faq/index', ['as' => 'faq.{data}.index', 'uses' => function () {
        return view('faq::pages.index');
    }]);

        \n";


        file_put_contents($routesFile, $routes, FILE_APPEND | LOCK_EX);
        }

    }
    /**
     * Registers the config file during publishing.
     * 
     * @return void 
     */
    public function register()
    {
        $this->registerFaq();
        config([
                'config/faq.php',
        ]);
    }
    /**
     * Registers the packages.
     * 
     * @return FAQ app
     */
    private function registerFaq()
    {
        $this->app->bind('faq', function ($app) {
            return new Faq($app);
        });
    }
}
