<?php

namespace App\Providers;

use App\Interfaces\CheckKodamRepositoryInterface;
use App\Repositories\CheckKodamRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CheckKodamRepositoryInterface::class, CheckKodamRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
