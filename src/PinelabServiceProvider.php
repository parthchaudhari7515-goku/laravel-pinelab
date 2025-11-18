<?php
namespace Vendor\Pinelab;
use Illuminate\Support\ServiceProvider;
use Parth\Pinelab\Services\GatewayService;

class PinelabServiceProvider extends ServiceProvider {
    public function boot() {
        $this->publishes([
            __DIR__.'/../config/pinelab.php' => config_path('pinelab.php'),
        ], 'config');
        $this->mergeConfigFrom(__DIR__.'/../config/pinelab.php','pinelab');
    }
    public function register() {
        $this->app->singleton(GatewayService::class, fn($app)=>new GatewayService($app['config']['pinelab']));
        $this->app->alias(GatewayService::class, 'pinelab.gateway');
    }
}
