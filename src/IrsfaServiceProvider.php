<?php

namespace Cdvedia\Irsfa;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class IrsfaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'irsfa');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'irsfa');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->registerPublishableResources();

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/irsfa'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/irsfa'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/irsfa'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->registerConfigs();
        $this->registerFacades();
        $this->registerAlias();
    }

    /**
     * Register the publishable files
     */
    private function registerPublishableResources()
    {
        $publishablePath = __DIR__."/..";

        $publishable = [
            'irsfa-config' => [
                "{$publishablePath}/config/config.php" => config_path('irsfa.php'),
            ],

        ];

        foreach ($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }

    /**
     * Register config
     */
    protected function registerConfigs()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'irsfa');
    }

    /**
     * Register the facades class
     */
    protected function registerFacades()
    {
        // Register the main class to use with the facade
        $this->app->singleton('irsfa', function () {
            return new Irsfa;
        });
        $this->app->singleton('contact', function () {
            return new Contact;
        });
        $this->app->singleton('domain', function () {
            return new Domain;
        });
        $this->app->singleton('dns-manager', function () {
            return new DnsManager;
        });
        $this->app->singleton('office365', function () {
            return new Office365;
        });
        $this->app->singleton('hosting', function () {
            return new Hosting;
        });
        $this->app->singleton('vps', function () {
            return new Vps;
        });
        $this->app->singleton('child-nameserver', function () {
            return new ChildNameserver;
        });
    }

    /**
     * Register the facade class alias
     */
    protected function registerAlias()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Irsfa', "Cdvedia\\Irsfa\\Facades\\Irsfa");
        $loader->alias('Irsfa\Contact', "Cdvedia\\Irsfa\\Facades\\Contact");
        $loader->alias('Irsfa\Domain', "Cdvedia\\Irsfa\\Facades\\Domain");
        $loader->alias('Irsfa\DnsManager', "Cdvedia\\Irsfa\\Facades\\DnsManager");
        $loader->alias('Irsfa\Office365', "Cdvedia\\Irsfa\\Facades\\Office365");
        $loader->alias('Irsfa\Hosting', "Cdvedia\\Irsfa\\Facades\\Hosting");
        $loader->alias('Irsfa\Vps', "Cdvedia\\Irsfa\\Facades\\Vps");
        $loader->alias('Irsfa\ChildNameserver', "Cdvedia\\Irsfa\\Facades\\ChildNameserver");
    }
}
