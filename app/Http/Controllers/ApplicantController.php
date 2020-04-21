<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;
use App\pel_role;
class ApplicantController extends Controller
{
    

	    public function index()
    {
        //$applicant = pel_applicant::all();
        //return view('applicant', compact('applicant'));
        return view('applicant');
    }

    public function show($id)
    {
        $num = auth()->user()->id;  
      $authrole= pel_role::where('userid', '=', $num )->first();
      $comp= pel_applicant::where('userid', '=', $num )->get();

        if ($authrole->role != 'applicant' )
        {
            return view ('403');
        }     
        elseif ($comp->isEmpty())
        {
            return view ('applicant');
        }
        else
        {
       $person= pel_applicant::where('id','=',$id )->first();
        return view('priapplicant', ['person' => $person]);
        
        }
    }

    public function store(pel_applicant $user)

    {
 $this->authorize('create', $user);
        request()->validate(['formClass' =>['required'], 'lname'=>['required'], 'fname'=>['required'], 'mname'=>['required'], 'pid'=>['required'], 'country'=>['required'], 'paddre'=>['required'], 'bstate'=>['required'], 'pcode'=>['required'], 'dob'=>['required'], 'hair'=>['required'], 'tfone'=>['required'], 'eyes'=>['required'], 'gender'=>['required'], 'occupation'=>['required'], 'avemployer'=>['required'], 'certd'=>['required_if:certrev,yes'], 'certrev'=>['required'], 'explanation'=>['required_if:certrev,yes'], 'daipre'=>['required'], 'lense'=>['required'], 'headache'=>['required'], 'dizziness'=>['required'], 'depreession'=>['required'], 'unconsciousness'=>['required'], 'motionSickness'=>['required'], 'glasses'=>['required'], 'discharge'=>['required'], 'allergy'=>['required'], 'rejection'=>['required'], 'asthma'=>['required'], 'insurance'=>['required'], 'vascular'=>['required'], 'admission'=>['required'], 'bloodPressure'=>['required'], 'alcohol'=>['required'], 'stomach'=>['required'], 'failedTest'=>['required'], 'kidney'=>['required'], 'surgery'=>['required'], 'suicide'=>['required'], 'diabetes'=>['required'], 'fdisorder'=>['required'], 'fglaucoma'=>['required'], 'fmental'=>['required'], 'fcholesterol'=>['required'], 'fepilepsy'=>['required'], 'fallergies'=>['required'], 'fdiabetes'=>['required'], 'medexplanation'=>['required'], 'ame'=>['required'], 'ameappoint'=>['required'], 'dacknowledge'=>['required'], 'signature'=>['required'], 'alcho'=>['required'], 'nontraf'=>['required'], 'ftuberculosis'=>['required'], 'convicexpl'=>'required_if:alcho,==,yes|required_if:nontraf,==,yes','vhealth'=>['required'], 'epilepsy'=>['required'],'dlma'=>['required_unless:nprioraap,lnprioraap'], 'precrip1'=>['required_if:daipre,yes'], 'drug1'=>['required_with:precrip1'], 'drug2'=>['required_with:precrip2'], 'drug3'=>['required_with:precrip3'], 'dvprofesional1'=>['required_if:vhealth,yes'],'vhealth1'=>['required_if:vhealth,yes'],'vrhealth1'=>['required_if:vhealth,yes'],'vhealth2'=>['required_with:dvprofesional2'],'vrhealth2'=>['required_with:dvprofesional2'],'vhealth3'=>['required_with:dvprofesional3'],'vrhealth3'=>['required_with:dvprofesional3',]]);
         
         pel_applicant::create(request(['formClass', 'lname', 'fname', 'mname', 'pid', 'country', 'paddre', 'bstate', 'pcode', 'dob', 'hair', 'tfone', 'eyes', 'gender', 'linone', 'liairline', 'licommercial', 'limulticrew', 'liatcspecialist', 'liflightengineer', 'liflightnav', 'liflightinstruc', 'liprivate', 'listudent', 'liballon', 'liglider', 'tliother', 'lipellicense', 'occupation', 'avemployer', 'certrev', 'certd', 'explanation', 'tpilot', 'tpilotsm', 'dlma', 'nprioraap','daipre', 'drug1', 'precrip1', 'drug2', 'precrip2', 'drug3', 'precrip3', 'lense', 'headache', 'epilepsy', 'dizziness', 'depreession', 'unconsciousness', 'motionSickness', 'glasses', 'discharge', 'allergy', 'rejection', 'asthma', 'insurance', 'vascular', 'admission', 'bloodPressure', 'alcohol', 'stomach', 'failedTest', 'kidney', 'surgery', 'suicide', 'diabetes', 'fdisorder', 'fglaucoma', 'fmental', 'fcholesterol','fepilepsy', 'fallergies', 'fdiabetes', 'medexplanation', 'alcho', 'nontraf', 'signature', 'convicexpl', 'vhealth', 'dvprofesional1', 'dvprofesional2', 'dvprofesional3', 'vhealth1', 'vrhealth1', 'vhealth2', 'vrhealth2', 'vhealth3','vrhealth3', 'ame', 'ameappoint', 'dacknowledge', 'ftuberculosis', 'userid']));
         
            $num = auth()->user()->id;
         pel_role::create(['userid' => $num, 'role' => 'application']);

        return redirect('nav');
    }

    public function update(Request $request, pel_applicant $pel_applicant)
    {
       
    	request()->validate([
    		'formClass' =>['required'], 'lname'=>['required'], 'fname'=>['required'], 'mname'=>['required'], 'pid'=>['required'], 'country'=>['required'], 'paddre'=>['required'], 'bstate'=>['required'], 'pcode'=>['required'], 'dob'=>['required'], 'hair'=>['required'], 'tfone'=>['required'], 'eyes'=>['required'], 'gender'=>['required']

    	]);

        $pel_applicant->update($request(['formClass', 'lname', 'fname', 'mname', 'pid', 'country', 'paddre', 'bstate', 'pcode', 'dob', 'hair', 'tfone', 'eyes', 'gender']));

         return redirect('/applicant');
    }

    public function delete(pel_applicant $pel_applicant)
    {
        $pel_applicant->delete();

         return redirect('/applicant');
    }


}
