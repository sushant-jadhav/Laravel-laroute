<?php
namespace App\Impl\Repo;

use Illuminate\Support\ServiceProvider;
use App\Impl\Repo\User\DbUser;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Bind interface UserRepo
        $this->app->bind('App\Impl\Repo\User\UserRepo',function($app){


            return(new DbUser());
        });
    }
}