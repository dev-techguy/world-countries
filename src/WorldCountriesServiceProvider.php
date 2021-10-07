<?php

namespace World\Countries;

use Illuminate\Support\ServiceProvider;

class WorldCountriesServiceProvider extends ServiceProvider
{
    /**
     * ----------------------------------------------------
     * define the boot method and the register method here
     * ----------------------------------------------------
     * @return void
     */
    public function boot()
    {
        /**
         * ---------------------------
         * load configuration file
         * ---------------------------
         */
        $this->mergeConfigFrom(
            __DIR__ . '/config/countries.php',
            'countries'
        );

        /**
         * ---------------------------
         * publishing the config file
         * ---------------------------
         */
        $this->publishes([
            __DIR__ . '/config/countries.php' => config_path('countries.php'),
        ], 'config');

        /**
         * ------------------------------
         * load the migrations here
         * ------------------------------
         */
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        /**
         * ---------------------------------------------
         * publish the migrations to the developer side
         * here
         * ---------------------------------------------
         */
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations'),
        ], 'migrations');

        /**
         * ---------------------------------------------
         * Load the factory for seeding the model
         * ---------------------------------------------
         */
        $this->loadFactoriesFrom(__DIR__ . '/Seeds/WorldCountriesTableSeeder.php');
    }

    /**
     * ------------------------------
     * Register here for any service
     * like the facades here
     * ------------------------------
     * @return void
     */
    public function register()
    {
        //
    }
}
