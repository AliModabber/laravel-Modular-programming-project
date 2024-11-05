<?php

namespace Modules\Auth\app\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Auth\app\View\Components\AppLayout;
use Modules\Auth\app\View\Components\GuestLayout;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
      $this->loadRoutesFrom(__DIR__.'/../../routes/auth.php');
      $this->loadViewsFrom(__DIR__.'/../../resources/views/','Auth');
      $this->loadMigrationsFrom(__DIR__.'/../../database/migrations/');
      $this->loadViewComponentsAs('Auth',[
        GuestLayout::class,
        AppLayout::class
      ]);
    }

  
}
