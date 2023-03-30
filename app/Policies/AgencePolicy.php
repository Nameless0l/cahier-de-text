<?php

namespace App\Policies;

use App\Models\Agence;
use App\Models\User;
use App\Services\AuthServices;
use Illuminate\Auth\Access\HandlesAuthorization;

class AgencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny()
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view($agence)
    {
        return AuthServices::user_auth()->role === 'Admin' ? true : false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create()
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( Agence $agence)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Agence $agence)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Agence $agence)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Agence $agence)
    {
        //
    }
}
