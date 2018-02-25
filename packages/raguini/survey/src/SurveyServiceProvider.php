<?php

namespace Survey;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class SurveyServiceProvider extends ServiceProvider
{

    public function boot() {
        Schema::defaultStringLength(191);
        $this->loadRoutesFrom( __DIR__ . '\routes\web.php');
        $this->loadViewsFrom( __DIR__ . '/./../resources/views', 'survey');
    }

    public function register() {
        $this->registerPublishables();
    }

    public function registerPublishables() {
        $basePath = dirname( __DIR__ );

        $publishable = [
            'migrations' => [
                "$basePath/publishable/database/migrations" => database_path('migrations')
            ],
            'config' =>  [
                "$basePath/publishable/config/survey.php" => config_path('survey.php')
            ]
        ];

        foreach($publishable as $group => $path) {
            $this->publishes($path, $group);
        }
    }
}
