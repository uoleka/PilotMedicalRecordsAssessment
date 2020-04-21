<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\pel_soda;
use App\pel_role;
use App\pel_applicant;
class SodaController extends Controller
{
       public function index()
    {
        $soda = pel_soda::all();
        return view('soda', compact('soda'));
    }

     public function show($id)
    {
         $num = auth()->user()->id;  
        $authrole= pel_role::where('userid', '=', $num )->first();
        $role = $authrole->role;
        $ray = array('ama','ame');
        $comp= pel_soda::where('appid','=',$id )->get();
        if (!in_array($role,$ray) )
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

            return view ('soda', ['person' =>  $person]);
        }
        else
        {
        
        $person= pel_soda::where('appid','=',$id )->first();
        return view('prisoda', ['person' => $person]);
        
        }
    }

    public function store()

    {
    
        request()->validate(['name' =>['required'], 'paddre'=>['required'], 'classsame'=>['required'], 'waiversnum'=>['required'], 'limitation'=>['required'], 'defect'=>['required'], 'bissue'=>['required'], 'doissu'=>['required'], 'nametitle'=>['required'], 'signature'=>['required'], 'appid'=>['required']]);

         pel_soda::create(request(['name','paddre','classsame','waiversnum','limitation','defect','bissue','doissu','nametitle','signature','appid']));
         $message= "Record saved successfully";
        return view('/nav', ['message' => $message]);
    }

    public function update(Request $request, pel_soda $pel_soda)
    {
       
        request()->validate([]);

        $pel_soda->update($request([]));

         return redirect('/soda');
    }

    public function delete(pel_soda $pel_soda)
    {
        $pel_soda->delete();

         return redirect('/soda');
    }

}
