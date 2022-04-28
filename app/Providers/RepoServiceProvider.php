<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repo;
class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Repo\UsersInterface::class, Repo\UsersRepo::class);
        $this->app->bind(Repo\ServicesInterface::class, Repo\ServicesRepo::class);
        $this->app->bind(Repo\CompaniesInterface::class, Repo\CompaniesRepo::class);
        $this->app->bind(Repo\AdminsInterface::class, Repo\AdminsRepo::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
