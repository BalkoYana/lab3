<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Gate::define('factories-basic',function ($user){
            return $user !== null;
        });
        Gate::define('update-factories',function (User $user,$factories){
            if($user->role === "editor" || $user->role==="super_admin") return true;

            return $factories->creator_user_id===$user->id;
        });

        Gate::define('delete-factories', function (User $user){
            return $user->role==="super_admin";
        });
    }
}
