<?php

namespace App\Policies;

use App\Models\User;
use App\Models\View;
use Illuminate\Auth\Access\HandlesAuthorization;

class ViewPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\View  $view
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, View $view)
    {
        //
        return true;

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\View  $view
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, View $view)
    {
        //
        if($user->id == 1){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\View  $view
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, View $view)
    {
        //
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\View  $view
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, View $view)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\View  $view
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, View $view)
    {
        //
        return false;

    }
}
