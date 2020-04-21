<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_ameapproval;
use App\pel_role;
use App\user;

class ameapprovalController extends Controller
{
    Public function index()
    {
        return view('ameapproval');
    }

    Public function show($id)
    {
    	$person=pel_ameapproval::where("ameid","=", $id)->first();
        $userameid = $id;
        return view('ameapproval', compact('person','userameid'));
    }

    Public function store(request $request)
    {
    	//check if the ame record alreday exists
    	$num = $request->ameid;
        $stat = $request->desigstatus;
    	// validate the record
    	request()->validate(['certstatus'=>['required'],'denialreason'=>['required'],'classsame'=>['required'],'serialnumb'=>['required'],'desigstatus'=>['required'],'applacceptance'=>['required'],'intissued'=>['required'],'amecity'=>['required'],'dostatus'=>['required'],'ameid'=>['required'],'desigdenialreason'=>['required']]);
         //update or create the record
         $status = pel_ameapproval::updateOrCreate (['ameid'=>$num],['certstatus'=>$request->certstatus,'denialreason'=>$request->denialreason,'classsame'=>$request->classsame,'serialnumb'=>$request->serialnumb,'desigstatus'=>$request->desigstatus,'desigdenialreason'=>$request->desigdenialreason,'applacceptance'=>$request->applacceptance,'intissued'=>$request->intissued,'amecity'=>$request->amecity,'dostatus'=>$request->dostatus]);
         //update the role data to activate the ame.
         if ($stat == "yes")
            {
                $activation = pel_role::updateOrCreate (['userid'=>$num],['role'=>'ame','status'=>"active"]);
            }
        else
            {
                $activation = pel_role::updateOrCreate (['userid'=>$num],['role'=>'ame','status'=>"deactived"]);
            }
       $message= "Ame record updated successfully";
        //return to nav
        return view('nav', ['message' => $message]);
   
    }
}
