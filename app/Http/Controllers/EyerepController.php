<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_eyerep;
use App\pel_role;
use App\pel_applicant;
class EyerepController extends Controller
{
     public function index()
    {
        
    }

    public function show($id)
    {
        
       $num = auth()->user()->id;  
        $authrole= pel_role::where('userid', '=', $num )->first();
        $role = $authrole->role;
        $ray = array('ama','ame');
      $comp= pel_eyerep::where('appid', '=', $id )->get();

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

            return view ('eyerep', ['person' =>  $person]);
        }
        else
        {
       $person= pel_eyerep::where('appid','=',$id )->first();
        return view('prieyerep', ['person' => $person]);
        
        }
    }

    public function store()

    {
    
        request()->validate(['dorep'=>['required'],'lname'=>['required'],'fname'=>['required'],'mname'=>['required'],'dob'=>['required'],'gender'=>['required'],'paddre'=>['required'],'hist'=>['required'],'cor20exo'=>['required'],'cor20eso'=>['required'],'cor20hyper'=>['required'],'cor18exo'=>['required'],'cor18eso'=>['required'],'cor18hyper'=>['required'],'uncor20exo'=>['required'],'uncor20eso'=>['required'],'uncor20hyper'=>['required'],'uncor18exo'=>['required'],'uncor18eso'=>['required'],'uncor18hyper'=>['required'],'fusion'=>['required'],'pupils'=>['required'],'fields'=>['required'],'ophthalmoscopic'=>['required'],'slit'=>['required'],'mused'=>['required'],'od'=>['required'],'os'=>['required'],'dvtsmethd'=>['required'],'dvexo'=>['required'],'dveso'=>['required'],'dvhyper'=>['required'],'dvcood'=>['required'],'dvcoos'=>['required'],'dvcoov'=>['required'],'dvglod'=>['required'],'dvglos'=>['required'],'dvglov'=>['required'],'nvtsmethd'=>['required'],'nvexo'=>['required'],'nveso'=>['required'],'nvhyper'=>['required'],'nvcood'=>['required'],'nvcoos'=>['required'],'nvcoov'=>['required'],'nvglod'=>['required'],'nvglos'=>['required'],'nvglov'=>['required'],'ivtsmethd'=>['required'],'ivexo'=>['required'],'iveso'=>['required'],'ivhyper'=>['required'],'ivcood'=>['required'],'ivcoos'=>['required'],'ivcoov'=>['required'],'ivglod'=>['required'],'ivglos'=>['required'],'ivglov'=>['required'],'preaod'=>['required'],'preaos'=>['required'],'prebod'=>['required'],'prebos'=>['required'],'typelense'=>['required'],'examfreq'=>['required'],'propinion'=>['required'],'speaddre'=>['required'],'spesign'=>['required']]);
         
         pel_eyerep::create(request(['dorep','lname','fname','mname','dob','gender','paddre','hist','cor20exo','cor20eso','cor20hyper','cor18exo','cor18eso','cor18hyper','uncor20exo','uncor20eso','uncor20hyper','uncor18exo','uncor18eso','uncor18hyper','fusion','pupils','fields','ophthalmoscopic','slit','mused','od','os','dvtsmethd','dvexo','dveso','dvhyper','dvcood','dvcoos','dvcoov','dvglod','dvglos','dvglov','nvtsmethd','nvexo','nveso','nvhyper','nvcood','nvcoos','nvcoov','nvglod','nvglos','nvglov','ivtsmethd','ivexo','iveso','ivhyper','ivcood','ivcoos','ivcoov','ivglod','ivglos','ivglov','preaod','preaos','prebod','prebos','typelense','examfreq','propinion','speaddre','spesign','symptoms']));

       $message= "Record saved successfully";
        return view('/nav', ['message' => $message]);
    }

    public function update(Request $request, pel_eyerep $pel_eyerep)
    {
       
        request()->validate([]);

        $pel_eyerep->update($request([]));

         return redirect('/eyerep');
    }

    public function delete(pel_eyerep $pel_eyerep)
    {
        $pel_eyerep->delete();

         return redirect('/eyerep');
    }
}
