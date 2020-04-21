<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class appldecController extends Controller
{
    public function index()
    {
    	$num = auth()->user()->id;
        $person = pel_applicant::where ('userid','=',$num)->WhereNull('dacknowledge')->first();
        return view('appldec', compact('person'));
    }

    Public function store(request $request)
    {
    	
        request()->validate(['signature'=>['required']]);
    	$num = auth()->user()->id;
        $sign=auth()->user()->password;
        $appsign = $request->signature;
        if (Hash::check($appsign, $sign)) 
        {
    	$status=pel_applicant::updateOrCreate (['userid'=>$num],['dacknowledge'=>now(), 
            'signature'=>$request->signature]);
    	$message="You have successfully submitted your application. Your Application number for appointment wih an AME is displayed below.";
    	return view('nav', compact('message'));
        }
        
        $message = "The Password you entered does not match the login password";

        return view('nav', compact('message'));

    }

}


