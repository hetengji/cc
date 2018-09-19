<?php

namespace HeTengJi\Cc;

use Illuminate\Support\ServiceProvider;

class CcServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Cc $extension)
    {
        if (! Cc::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'cc');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/he/cc')],
                'cc'
            );
        }

        $this->app->booted(function () {
            Cc::routes(__DIR__.'/../routes/web.php');
        });
    }
}