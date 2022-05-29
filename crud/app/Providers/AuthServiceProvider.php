<?php

namespace App\Providers;

use App\Product;
use App\Policies\ProductPolicy;
use App\Usert;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Product::class => ProductPolicy::class,
        User::class=>UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-settings', function($user){
          return $user->isAdmin;
        });
        // Gate::define('updade-product' function($user,$product){
        //   return $user -> id == $product -> product_id;
        // })
        Gate::before(function ($user, $ability){
          if ($user->isSuperAdmin()){
            return true;
          }
        });

    }
}
