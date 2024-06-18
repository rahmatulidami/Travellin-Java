<?php

namespace App\Policies;

// use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Spatie\Permission\Models\Permission;

class PermissionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if($user->hasPermissionTo('View Permissions') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Permission $permission)
    {
        if($user->hasPermissionTo('View Permissions') || $user->hasRole('Admin')){
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
        if($user->hasPermissionTo('Create Permissions') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Permission $permission)
    {
        if($user->hasPermissionTo('Edit Permissions') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Permission $permission)
    {
        if($user->hasPermissionTo('Delete Permissions') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Permission $permission)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Permission $permission)
    {
        //
    }
}
