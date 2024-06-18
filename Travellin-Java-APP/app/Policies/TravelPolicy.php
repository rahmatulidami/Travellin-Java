<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\Travel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TravelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if($user->hasPermissionTo('View Travel') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Travel $travel)
    {
        if($user->hasPermissionTo('View Travel') || $user->hasRole('Admin')){
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
        if($user->hasPermissionTo('Create Travel') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Travel $travel)
    {
        if($user->hasPermissionTo('Edit Travel') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Travel $travel)
    {
        if($user->hasPermissionTo('Delete Travel') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Travel $travel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Travel $travel)
    {
        //
    }
}
