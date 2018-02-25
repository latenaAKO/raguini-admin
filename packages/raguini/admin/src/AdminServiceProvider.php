<?php

namespace Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom( __DIR__ . '/./../resources/views', 'admin');
    }

    public function register() {
        $this->registerPublishables();
    }

    public function registerPublishables() {
        $basePath = dirname(__DIR__);

        $publishable = [
            'config' => [
                "$basePath/publishables/config/admin.php" => config_path('admin.php')
            ],
            'migrations' => [
                "$basePath/publishables/database/migrations" => database_path('migrations')
            ]
        ];

        foreach($publishable as $group => $targetPath) {
            $this->publishes($targetPath, $group);
        }
    }
}