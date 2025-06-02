<?php

namespace App\Providers;

use App\Models\Crud;
use App\Policies\CrudPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}
    
    protected $policies = [
        Crud::class => CrudPolicy::class

    ];
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });
        Gate::define('isModerate', function ($user) {
            return $user->role === 'moderate';
        });
        Gate::define('isUser', function ($user) {
            return $user->role === 'User';
        });
    }
}
