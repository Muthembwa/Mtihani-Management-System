<?php

namespace App\Providers;

use App\Role;
use App\User;
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

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

         // Auth gates for: Schools
         Gate::define('school_access', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('school_create', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('school_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('school_view', function ($user) {
            return in_array($user->role_id, [1, 2, 5]);
        });
        Gate::define('school_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });
        
        // Auth gates for: Students
        Gate::define('student_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5, 6]);
        });

        Gate::define('student_create', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6]);
        });
        Gate::define('student_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5, 6]);
        });
        Gate::define('student_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5, 6]);
        });
        Gate::define('student_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 5, 6]);
        });

        // Auth gates for: Streams
        Gate::define('stream_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 5, 6]);
        });
        Gate::define('stream_create', function ($user) {
            return in_array($user->role_id, [1, 3, 5, 6]);
        });
        Gate::define('stream_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 5, 6]);
        });
        Gate::define('stream_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 5]);
        });
        Gate::define('stream_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 5]);
        });

        // Auth gates for: Subjects
        Gate::define('subject_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5, 6]);
        });
        Gate::define('subject_create', function ($user) {
            return in_array($user->role_id, [1, 3, 5, 6]);
        });
        Gate::define('subject_edit', function ($user) {
            return in_array($user->role_id, [1, 3, 5, 6]);
        });
        Gate::define('subject_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5, 6]);
        });
        Gate::define('subject_delete', function ($user) {
            return in_array($user->role_id, [1, 5]);
        });

        // Auth gates for: Marks
        Gate::define('mark_access', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5, 6]);
        });
        Gate::define('mark_create', function ($user) {
            return in_array($user->role_id, [1, 3, 4, 5, 6]);
        });
        Gate::define('mark_edit', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5, 6]);
        });
        Gate::define('mark_view', function ($user) {
            return in_array($user->role_id, [1, 2, 3, 4, 5, 6]);
        });
        Gate::define('mark_delete', function ($user) {
            return in_array($user->role_id, [1, 3, 4]);
        });

    }
}
