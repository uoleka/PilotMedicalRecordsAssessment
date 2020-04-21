<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_ophtharep;
use App\pel_role;
use App\pel_applicant;
class OphtharepController extends Controller
{
   public function index()
    {
        $pel_eyerep = pel_eyerep::all();
        return view('projects.index', compact('ophtharep'));
    }

    public function show($id)
    {
         $num = auth()->user()->id;  
        $authrole= pel_role::where('userid', '=', $num )->first();
        $role = $authrole->role;
        $ray = array('ama','ame');
       $comp= pel_ophtharep::where('appid', '=', $id )->get();
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
            $person =pel_applicant::find($id);

            return view ('ophtharep', ['person' =>  $person]);
        }
        else
        {
        
        $person= pel_ophtharep::where('appid','=',$id )->first();
        return view('priophtharep', ['person' => $person]);
        }
    }

    public function store()

    {
    
        request()->validate(['dorep'=>['required'],'lname'=>['required'],'dob'=>['required'],'gender'=>['required'],'paddre'=>['required'],'hist'=>['required'],'fahist'=>['required'],'diagnosis'=>['required'],'discover'=>['required'],'confirmation'=>['required'],'surgeried'=>['required'],'anticsurgery'=>['required'],'resthera'=>['required'],'pretret'=>['required'],'priocont'=>['required'],'maxintra'=>['required'],'intraocu'=>['required'],'preaod'=>['required'],'preaos'=>['required'],'prebod'=>['required'],'prebos'=>['required'],'glass'=>['required'],'size'=>['required'],'dvtmethod'=>['required'],'dvuncood'=>['required'],'dvuncoos'=>['required'],'dvuncoov'=>['required'],'dvcood'=>['required'],'dvcoos'=>['required'],'dvcoov'=>['required'],'nvtmethod'=>['required'],'nvuncood'=>['required'],'nvuncoos'=>['required'],'nvuncoov'=>['required'],'nvcood'=>['required'],'nvcoos'=>['required'],'nvcoov'=>['required'],'ivtmethod'=>['required'],'ivuncood'=>['required'],'ivuncoos'=>['required'],'ivuncoov'=>['required'],'ivcood'=>['required'],'ivcoos'=>['required'],'ivcoov'=>['required'],'corneeded'=>['required'],'conglass'=>['required'],'odcylinaxis'=>['required'],'pupilsiz'=>['required'],'oscylinaxis'=>['required'],'slitlamp'=>['required'],'speaddre'=>['required'],'spesign'=>['required'],'varnorm'=>['required'],'fusion'=>['required']]);
         
         pel_ophtharep::create(request(['dorep','lname','dob','gender','paddre','hist','fahist','diagnosis','discover','confirmation','surgeried','anticsurgery','resthera','pretret','priocont','maxintra','intraocu','preaod','preaos','prebod','prebos','glass','size','dvtmethod','dvuncood','dvuncoos','dvuncoov','dvcood','dvcoos','dvcoov','nvtmethod','nvuncood','nvuncoos','nvuncoov','nvcood','nvcoos','nvcoov','ivtmethod','ivuncood','ivuncoos','ivuncoov','ivcood','ivcoos','ivcoov','corneeded','conglass','odcylinaxis','pupilsiz','oscylinaxis','slitlamp','speaddre','spesign','varnorm','fusion']));

        $message= "Record saved successfully";
        return view('/nav', ['message' => $message]);
    }

    public function update(Request $request, pel_ophtharep $pel_ophtharep)
    {
       
        request()->validate([]);

        $pel_eyerep->update($request([]));

         return redirect('/ophtharep');
    }

    public function delete(pel_ophtharep $pel_ophtharep)
    {
        $pel_eyerep->delete();

         return redirect('/ophtharep');
    }
}
