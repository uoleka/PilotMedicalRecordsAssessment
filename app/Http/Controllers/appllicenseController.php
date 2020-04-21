<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;


class appllicenseController extends Controller
{
    public function index()
    {
    	$num = auth()->user()->id;
        $person = pel_applicant::where ('userid','=',$num)->WhereNull('dacknowledge')->first();
        return view('appllicense', compact('person'));
    }

    public function store(request $request)
    {
    	
        if ($request->license == 'none')
        {
           $num = auth()->user()->id;
           $status=pel_applicant::updateOrCreate (
               ['userid'=>$num],
               [
            'license'           =>$request->license, 
            'tliother'          =>$request->tliother, 
            'lipellicense'      =>$request->lipellicense, 
            'occupation'        =>$request->occupation, 
            'avemployer'        =>$request->avemployer, 
            'certrev'           =>$request->certrev, 
            'certd'             =>$request->certd, 
            'explanation'       =>$request->explanation, 
            'tpilot'            =>$request->tpilot, 
            'tpilotsm'          =>$request->tpilotsm, 
            'dlma'              =>$request->dlma, 
            'nprioraap'         =>$request->nprioraap
            
            ]);
           return redirect('applhistory');
        }
        
        if ($request->license != 'atc' || $request->license != 'maintenanceengr')
        {
            request()->validate(['tpilot'=>['required'], 'tpilotsm'=>['required']]);
        }
        
        request()->validate([
            'occupation'    =>['required_unless:license,none'], 
            'avemployer'    =>['required_unless:license,none'], 
            'certrev'       =>['required_unless:license,none'], 
            'certd'         =>['required_if:certrev,yes'], 
            'explanation'   =>['required_if:certrev,yes'],
            'dlma'          =>['required_unless:nprioraap,lnprioraap'],
            'lipellicense'  =>['required_unless:license,none'],
            'dlma'          =>['required_unless:nprioraap,lnprioraap']
        
        ]);
    	$num = auth()->user()->id;
        $status=pel_applicant::updateOrCreate (['userid'=>$num],[
        'license'       =>$request->license, 
        'tliother'      =>$request->tliother, 
        'lipellicense'  =>$request->lipellicense, 
        'occupation'    =>$request->occupation, 
        'avemployer'    =>$request->avemployer, 
        'certrev'       =>$request->certrev, 
        'certd'         =>$request->certd, 
        'explanation'   =>$request->explanation, 
        'tpilot'        =>$request->tpilot, 
        'tpilotsm'      =>$request->tpilotsm, 
        'dlma'          =>$request->dlma, 
        'nprioraap'     =>$request->nprioraap
        
        ]);
    	
        return redirect('applhistory');
    }
}

           