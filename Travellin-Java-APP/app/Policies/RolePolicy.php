<?php

namespace App\Policies;

// use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if($user->hasPermissionTo('View roles') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Role $role)
    {
        if($user->hasPermissionTo('View roles') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if($user->hasPermissionTo('Create roles') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Role $role)
    {
        if($user->hasPermissionTo('Edit roles') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Role $role)
    {
        if($user->hasPermissionTo('Delete roles') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Role $role)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Role $role)
    {
        //
    }
}
