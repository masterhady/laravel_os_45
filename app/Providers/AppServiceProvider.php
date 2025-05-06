<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Gate::before(function($user){
            if($user->role == "admin"){
                return true;
            }
        });

        Gate::define('edit_delete', function(User $user, Teacher $teacher){
            return $user->role == "user" && $user->id == $teacher->user_id;
        });


        // Gate::define("")














        // //
        // // Gate --> 
        // Gate::define("view-teachers", function($user){
        //     return in_array($user->role, ["guest", "admin","user"]);
        // });

        // Gate::define("create-teacher", function($user){
        //     return in_array($user->role, ["admin"]);
        // });

        // Gate::define("edit-teacher", function(User $user, Teacher $teacher){

        //     // dd($teacher);

        //     return $user->role == 'admin' && $user->id == $teacher->user_id;
        // });

        // Gate::define("delete-teacher", function($user){
        //     return $user->role == 'admin' && $user->id === $teacher->user_id;
        // });

        



    }
}
