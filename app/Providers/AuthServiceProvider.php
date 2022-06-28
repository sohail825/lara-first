<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models;
// use Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-student', function($student){
            return $student->hasRole('sadmin');
        });
        Gate::define('delete-student', function($student){
            return $student->hasRole('manger');
        });
        Gate::define('add-student', function($student){
            return $student->hasRole('sadmin');
        });
        Gate::define('show-student', function($student){
            return $student->hasRole('support');
        });
        Gate::define('manage-admins', function($admin){
            return $admin->hasAnyRoles(['sadmin','manger']);
        });
    }

}