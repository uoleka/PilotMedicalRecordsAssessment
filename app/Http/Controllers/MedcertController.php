<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_medcert;
use App\pel_applicant;
use App\pel_medexam;
use App\pel_role;
class MedcertController extends Controller
{
  public function index()
    {
        $medcert = pel_medcert::all();
        return view('medcert', compact('medcert'));
    }

   public function show($id)
    {
         $num = auth()->user()->id;  
        $authrole= pel_role::where('userid', '=', $num )->first();
        $role = $authrole->role;
        $ray = array('ama','ame','caa');
       $comp= pel_medcert::where('appid', '=', $id )->get();
       $personmed =pel_medexam::where('appid', '=', $id )->get();
       if (!in_array($role,$ray))
        {
             abort(403);
        } 
        elseif ($comp->isEmpty())
        {
            if ($role != 'ame')
        {
            abort(403);
        } 

            if ($personmed->isEmpty())
             {
                $message= "Please fill the Medical Report form first.";
                return view('/nav', ['message' => $message]); 
             }
            $person =pel_applicant::find($id);
            $personmed =pel_medexam::where('appid', '=', $id )->first();
            return view ('medcert', ['person' =>  $person], ['personmed' =>  $personmed] );
        }
        else
       {
        
        $person= pel_medcert::where('appid','=',$id )->first();
        return view('primedcert', ['person' => $person]);
        
        }
    }

    public function store(request $request)

    {
    
        
            $role=pel_role::where ('userid', '=', auth()->user()->id)->first();
            if ($role->role =='ame')
            {
                request()->validate(['aname'=>['required'],'dob'=>['required'],'paddre'=>['required'],'nationality'=>['required'],'sinatureohold'=>['required'],'medcertclass'=>['required'],'issauthority'=>['required'],'validity'=>['required'],'limitation'=>['required'],'doissu'=>['required'],'doexam'=>['required'],'authnumb'=>['required'],'signaturcaa'=>['required'],'country'=>['required']]);
         
                    pel_medcert::create(request(['aname','dob','paddre','nationality','sinatureohold','medcertclass','issauthority','validity','limitation','doissu','doexam','authnumb','signaturcaa','country','appid']));
            
            }

            if ($role->role =='ama')
            {
                request()->validate(['signatureauth'=>['required'],'caastaffname'=>['required']]);
                pel_medcert::updateOrCreate(['appid'=>$request->appid],['signatureauth'=>$request->signatureauth, 'caastaffname'=>$request->caastaffname]);

            }
 
            $message= "Record saved successfully";
        return view('/nav', ['message' => $message]);
    }

    public function edit($id)
    {
       
         pel_medcert::updateOrCreate(['id'=>$id],['status'=>'processed']);
         return redirect('nav');

    }

    public function delete(pel_medcert $pel_medcert)
    {
        $pel_medcert->delete();

         return redirect('/medcert');
    }

}
