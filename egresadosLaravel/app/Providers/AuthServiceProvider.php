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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
         //superadmin : Editar Administradores(crud administradores)
        //Para validar solo edicion de usuario
        //administradores : Crud Noticias, Delete Egresados
        Gate::define('manageAdmins', function($user){
            return $user->hasRole('superadmin');
        });

        Gate::define('manageEgresados', function($user){
            return $user->hasRole('admin');
        });

        //administrar Usuarios
        Gate::define('manage-users', function($user){
            return $user->hasAnyRoles   (['superadmin','Administrador']);
        });
        //Para validar permiso de eliminar. 
        //Solo el superadmin puede eliminar
        Gate::define('delete-users', function($user){
            return $user->hasRole('superadmin');
        });

        //administrar Usuarios
        Gate::define('egresado', function($user){
            return $user->hasRole('egresado');
        });
        //
        //
    }
}
