<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;

class ameaddapplController extends Controller
{
    public function index()
    {
    	return view('ameaddappl');
    }

    public function store(request $request)
    {
    	request()->validate(['appnum'=>['required']]);
    	$num = auth()->user()->id;
    	if (is_null($request->dacknowledge))
    	{
	    	$status = pel_applicant::updateOrCreate (['id'=>$request->appnum],['ame'=>$num, 'status' => 1]);
	    	$message = "The Applicant has been added Successfully.";
    	}
    	else
    	{
    		$message = "The Applicant does not have a valid registration or did not complete the registration process";
    	}
    	
    	return view('nav', Compact('message'));
    }
}
