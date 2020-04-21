<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\pel_applicant' => 'App\Policies\pel_applicantPolicy',  
        'App\pel_ame' => 'App\Policies\pel_amePolicy', 
        'App\pel_ama' => 'App\Policies\pel_amaPolicy', 
        'App\pel_caa' => 'App\Policies\pel_caaPolicy', 
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
