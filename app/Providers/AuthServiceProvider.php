<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        Gate::define('create', function ($user, $module) {
            return in_array('create', config(config('app.name') . '.permission.' . $user->role . '.' . $module));
        });

        Gate::define('delete', function ($user, $module) {
            return in_array('delete', config(config('app.name') . '.permission.' . $user->role . '.' . $module));
        });

        Gate::define('issue', function ($user, $module) {
            return in_array('issue', config(config('app.name') . '.permission.' . $user->role . '.' . $module));
        });

        Gate::define('view', function ($user, $module) {
            return in_array('view', config(config('app.name') . '.permission.' . $user->role . '.' . $module));
        });
    }
}
