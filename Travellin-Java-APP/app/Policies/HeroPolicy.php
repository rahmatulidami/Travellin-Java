<?php

namespace App\Policies;

use App\Models\Hero;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class HeroPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if($user->hasPermissionTo('View Hero') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Hero $hero)
    {
        if($user->hasPermissionTo('View Hero') || $user->hasRole('Admin')){
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
        if($user->hasPermissionTo('Create Hero') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Hero $hero)
    {
        if($user->hasPermissionTo('Edit Hero') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Hero $hero)
    {
        if($user->hasPermissionTo('Delete Hero') || $user->hasRole('Admin')){
            // dd("halo");
            return true ;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Hero $hero)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Hero $hero)
    {
        //
    }
}
