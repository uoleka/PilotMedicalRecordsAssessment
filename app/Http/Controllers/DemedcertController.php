<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_demedcert;
use App\pel_applicant;
use App\pel_medexam;
use App\pel_role;

class DemedcertController extends Controller
{
  public function index()
    {
        $demedcert = pel_demedcert::all();
        return view('demedcert', compact('demedcert'));
    }

     public function show($id)
    {
         $num = auth()->user()->id;  
        $authrole= pel_role::where('userid', '=', $num )->first();
        $role = $authrole->role;
        $ray = array('ama','ame');
       $comp= pel_demedcert::where('appid', '=', $id )->get();
        $personmed =pel_medexam::where('appid', '=', $id )->get();
        if (!in_array($role,$ray))
        {
             abort(403);
        } 
        elseif ($comp->isEmpty())
        {
            if ($role != 'ame' )
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
            return view ('demedcert', ['person' =>  $person], ['personmed' =>  $personmed] );
        }
        else
        {
        $person= pel_demedcert::where('appid','=',$id )->first();
        return view('pridemedcert', ['person' => $person]);
        }
    }


    public function store()

    {
    
        request()->validate(['aname'=>['required'],'dob'=>['required'],'paddre'=>['required'],'formClass'=>['required'],'doexam'=>['required'],'mcar'=>['required'],'disqucond'=>['required'],'signature'=>['required'],'doapplication'=>['required'],'authnumb'=>['required'],'signaturex'=>['required']]);
         
         pel_demedcert::create(request(['aname','dob','paddre','formClass','doexam','mcar','disqucond','signature','doapplication','appid','signaturex','authnumb']));

       $message= "Record saved successfully";
        return view('/nav', ['message' => $message]);
    }

    public function update(Request $request, pel_demedcert $pel_demedcert)
    {
       
        request()->validate([]);

        $pel_demedcert->update($request([]));

         return redirect('/demedcert');
    }

    public function delete(pel_medcert $pel_medcert)
    {
        $pel_demedcert->delete();

         return redirect('/demedcert');
    }

}
