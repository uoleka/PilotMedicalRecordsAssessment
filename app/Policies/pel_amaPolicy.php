<?php

namespace App\Policies;

use App\User;
use App\pel_role;
use App\pel_ama;
use Illuminate\Auth\Access\HandlesAuthorization;

class pel_amaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the pel_ama.
     *
     * @param  \App\User  $user
     * @param  \App\pel_ama  $pelAma
     * @return mixed
     */
    public function view(User $user, pel_ama $pelAma)
    {
        //
    }

    /**
     * Determine whether the user can create pel_amas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $num = auth()->user()->id;  
      $num = auth()->user()->id;  
          $authrole = pel_role::where('userid', '=', $num )->where('role', '=', 'ama' )->where('status','=','active')->first();
       
        if (isset($authrole))
        {
            return $user;
        }  
    }

    /**
     * Determine whether the user can update the pel_ama.
     *
     * @param  \App\User  $user
     * @param  \App\pel_ama  $pelAma
     * @return mixed
     */
    public function update(User $user, pel_ama $pelAma)
    {
        //
    }

    /**
     * Determine whether the user can delete the pel_ama.
     *
     * @param  \App\User  $user
     * @param  \App\pel_ama  $pelAma
     * @return mixed
     */
    public function delete(User $user, pel_ama $pelAma)
    {
        //
    }

    /**
     * Determine whether the user can restore the pel_ama.
     *
     * @param  \App\User  $user
     * @param  \App\pel_ama  $pelAma
     * @return mixed
     */
    public function restore(User $user, pel_ama $pelAma)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the pel_ama.
     *
     * @param  \App\User  $user
     * @param  \App\pel_ama  $pelAma
     * @return mixed
     */
    public function forceDelete(User $user, pel_ama $pelAma)
    {
        //
    }
}
