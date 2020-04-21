<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_caa;

class caaregController extends Controller
{
   public function index()
   {
   	return view('caareg');
   }

    public function store(request $request)
    {
    	//$this->authorize('create', $user);
    	request()->validate(['designation'=>['required'], 'staffid'=>['required']]);
    		
    	$num = auth()->user()->id;
    	$status=pel_caa::updateOrCreate (['userid'=>$num],['name'=> auth()->user()->name, 'designation'=> $request->designation, 'staffid'=>$request->staffid, 'doapplication'=>now(), 'userid'=>$num]);
    	 return redirect('nav');
    }
}
