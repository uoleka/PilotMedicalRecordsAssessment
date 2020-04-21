<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;
use App\pel_role;
use App\pel_ame;
use App\pel_ama;
use App\pel_caa;

class navContoller extends Controller
{
    public function index()
    {
    	$num = auth()->user()->id;
    	$role = pel_role::where('userid','=',$num)->first();
    	$person = pel_applicant::where('userid','=',$num)->first();
    	$personame = pel_ame::where('userid','=',$num)->first();
    	$personama = pel_ama::where('userid','=',$num)->first();
    	$personcaa = pel_caa::where('userid','=',$num)->first();
        $message = "";
    if ($role->role =="applicant" && (!isset($person->dacknowledge)))
        {
        	return redirect ('applname');	
        } 

        elseif ($role->role =="ame" && (!isset($personame->doapplication)) )
        {
        	return redirect('amereg');
        }
        elseif ($role->role =="ama" && (!isset($personama->doapplication)) )
        {
        	return redirect('amareg');
        }
        elseif ($role->role =="caa" && (!isset($personcaa->doapplication)) )
        {
        	return redirect('caareg');
        }
    
        return view('nav', compact('person','message'));
    }
}
