<?php

namespace App\Providers;

use App\Contracts\MahasiswaRepositoryInterface;
use App\Repositories\MahasiswaRepository;
use App\Repositories\QueryBuilder\MahasiswaRepository as QueryBuilderMahasiswaRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(MahasiswaRepositoryInterface::class, MahasiswaRepository::class);
    }
}
