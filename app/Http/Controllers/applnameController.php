<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;
use App\pel_role;

class applnameController extends Controller
{
    public function index()
    {
    	$num = auth()->user()->id;
        $person = pel_applicant::where ('userid','=',$num)->WhereNull('dacknowledge')->first();
        return view('applname',compact('person'));
    }

    public function store(pel_applicant $pel_applicant, request $request)
    {
    	//$this->authorize('create', $user);
    	request()->validate(['formClass' =>['required'], 'lname'=>['required'], 'fname'=>['required'], 'mname'=>['required'], 'pid'=>['required'], 'country'=>['required'], 'paddre'=>['required'], 'bstate'=>['required'], 'pcode'=>['required'], 'dob'=>['required'], 'hair'=>['required'], 'tfone'=>['required'], 'eyes'=>['required'], 'gender'=>['required']]);
    		
    	$num = auth()->user()->id;
    	$status=pel_applicant::updateOrCreate (['userid'=>$num],['formClass'=> $request->formClass, 'lname'=> $request->lname, 'fname'=>$request->fname, 'mname'=>$request->mname, 'pid'=>$request->pid, 'country'=>$request->country, 'paddre'=>$request->paddre, 'bstate'=>$request->bstate, 'pcode'=>$request->pcode, 'dob'=>$request->dob, 'hair'=>$request->hair, 'tfone'=>$request->tfone, 'eyes'=>$request->eyes, 'gender'=>$request->gender,'userid'=>$request->userid]);
    	//$role = pel_role::updateOrCreate (['userid'=>$num],['userid'=>$num, 'role'=>'applicant']); 
    	
        return redirect('appllicense');
    }
}
