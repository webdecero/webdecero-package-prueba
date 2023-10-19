<?php

namespace Webdecero\Prueba;

use Illuminate\Support\ServiceProvider;

class WebdeceroServiceProvider extends ServiceProvider {
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    
    public function boot() {

        $this->bootRoutes();   

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        
    }
        
    private function bootRoutes() {

        $this->loadRoutesFrom(__DIR__ . '/routes/webdecero.php');
        
    }
}


