<?php

namespace HeTengJi\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Test $extension)
    {
        if (! Test::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'test');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/hetengji/test')],
                'test'
            );
        }

        $this->app->booted(function () {
            Test::routes(__DIR__.'/../routes/web.php');
        });
    }
}