<?php

namespace App\Providers;

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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create', function($user, $module){
            return in_array('create', config('traininginstitute.permission.'.$user->role.'.'.$module));
        });

        Gate::define('view', function($user, $module){
            return in_array('view', config('traininginstitute.permission.'.$user->role.'.'.$module));
        });

        Gate::define('moderate', function($user, $module){
            return in_array('moderate', config('traininginstitute.permission.'.$user->role.'.'.$module));
        });
    }
}
