<?php

namespace App\Policies;

use App\User;
use App\pel_role;
use App\pel_caa;
use Illuminate\Auth\Access\HandlesAuthorization;

class pel_caaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function create(User $user)
    {
        $num = Auth()->user()->id;
        $authrole = pel_role::where('userid', '=', $num)->where('role','=','caa')->where('status','=','active')->first();
        if (isset($authrole))
        {
            return $user;
        } 
    }

    public function edit(User $user)
    {
        $num = Auth()->user()->id;
        $authrole = pel_role::where('userid', '=', $num)->where('role','=','caa')->where('status','=','active')->first();
        $designation = pel_caa::where('designation','=','Director')->first();

        if ((isset($authrole)) && (isset($designation)))
        {
            return $user;
        } 
    }
}
