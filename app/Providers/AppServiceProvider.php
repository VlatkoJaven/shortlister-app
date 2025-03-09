<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ShortlisterUserRepositoryInterface;
use App\Repositories\ShortlisterUserRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ShortlisterUserRepositoryInterface::class, ShortlisterUserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
