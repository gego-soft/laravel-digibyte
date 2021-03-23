<?php

namespace Gegosoft\Digibyte\Providers;

use Gegosoft\Digibyte\Client as DigibyteClient;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $path = realpath(__DIR__.'/../../config/config.php');

        $this->publishes([$path => config_path('digibyted.php')], 'config');
        $this->mergeConfigFrom($path, 'digibyted');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAliases();

        $this->registerClient();
    }

    /**
     * Register aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
        $aliases = [
            'digibyted' => 'Gegosoft\Digibyte\Client',
        ];

        foreach ($aliases as $key => $aliases) {
            foreach ((array) $aliases as $alias) {
                $this->app->alias($key, $alias);
            }
        }
    }

    /**
     * Register client.
     *
     * @return void
     */
    protected function registerClient()
    {
        $this->app->singleton('digibyted', function ($app) {
            return new DigibyteClient([
                'scheme' => $app['config']->get('digibyted.scheme', 'http'),
                'host'   => $app['config']->get('digibyted.host', 'localhost'),
                'port'   => $app['config']->get('digibyted.port', 8332),
                'user'   => $app['config']->get('digibyted.user'),
                'pass'   => $app['config']->get('digibyted.password'),
                'ca'     => $app['config']->get('digibyted.ca'),
            ]);
        });
    }
}
