<?php

namespace App\Policies;

use App\User;
use App\pel_role;
use App\pel_applicant;
use Illuminate\Auth\Access\HandlesAuthorization;

class pel_applicantPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the pel_applicant.
     *
     * @param  \App\User  $user
     * @param  \App\pel_applicant  $pelApplicant
     * @return mixed
     */
    public function view(User $user, pel_applicant $pelApplicant)
    {
        
        {
            return $pelApplicant->userid == $user->id;
        }  
    
    }


    /**
     * Determine whether the user can create pel_applicants.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
     $num = auth()->user()->id;  
          $authrole = pel_role::where('userid', '=', $num )->where('role', '=', 'applicant' )->first();
       
        if (isset($authrole))
        {
            return $user;
        }  
    }

    /**
     * Determine whether the user can update the pel_applicant.
     *
     * @param  \App\User  $user
     * @param  \App\pel_applicant  $pelApplicant
     * @return mixed
     */
    public function update(User $user, pel_applicant $pelApplicant)
    {
        //
    }

    /**
     * Determine whether the user can delete the pel_applicant.
     *
     * @param  \App\User  $user
     * @param  \App\pel_applicant  $pelApplicant
     * @return mixed
     */
    public function delete(User $user, pel_applicant $pelApplicant)
    {
        //
    }

    /**
     * Determine whether the user can restore the pel_applicant.
     *
     * @param  \App\User  $user
     * @param  \App\pel_applicant  $pelApplicant
     * @return mixed
     */
    public function restore(User $user, pel_applicant $pelApplicant)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the pel_applicant.
     *
     * @param  \App\User  $user
     * @param  \App\pel_applicant  $pelApplicant
     * @return mixed
     */
    public function forceDelete(User $user, pel_applicant $pelApplicant)
    {
        //
    }
}
