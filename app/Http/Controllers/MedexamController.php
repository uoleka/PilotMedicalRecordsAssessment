<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_medexam;
use App\pel_role;
use App\pel_applicant;
class MedexamController extends Controller
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
       $comp= pel_medexam::where('appid', '=', $id )->get();
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

            return view ('medexam', ['person' =>  $person]);
        }
        else
        {
            $person =pel_applicant::find($id);
            $personmed =pel_medexam::where('appid', '=', $id )->first();
            return view('primedexam', ['personmed' => $personmed], ['person' => $person]);
               
        }
    }

    

    public function store()

    {
    
        request()->validate(['height'=>['required'], 'weight'=>['required'], 'soda'=>['required'], 'sodasn'=>['required'], 'head'=>['required'], 'vascularsys'=>['required'], 'nose'=>['required'], 'sinuses'=>['required'], 'abdomen'=>['required'], 'anus'=>['required'], 'mouth'=>['required'], 'skin'=>['required'], 'ear'=>['required'], 'gusys'=>['required'], 'eardrum'=>['required'], 'extremities'=>['required'], 'eyes'=>['required'], 'spine'=>['required'], 'opthal'=>['required'], 'pupils'=>['required'], 'bodymarks'=>['required'], 'lymphatics'=>['required'], 'ocularotility'=>['required'], 'neurologic'=>['required'], 'lungsschest'=>['required'], 'psychiatric'=>['required'], 'hear'=>['required'], 'fourthoua'=>['required'],'fivehunb'=>['required'], 'onethoub'=>['required'], 'twothoub'=>['required'], 'threethoub'=>['required'], 'fourthoub'=>['required'], 'colorresult'=>['required'], 'rightear'=>['required'], 'rightcorear'=>['required'], 'nearright'=>['required'], 'interright'=>['required'], 'leftear'=>['required'], 'leftcorear'=>['required'], 'nearleft'=>['required'], 'interleft'=>['required'], 'bothear'=>['required'], 'nearboth'=>['required'], 'interboth'=>['required'], 'fovision'=>['required'], 'esoph'=>['required'], 'exoph'=>['required'], 'lhyper'=>['required'], 'rhyper'=>['required'], 'systolic'=>['required'], 'pulse'=>['required'], 'diastolic'=>['required'], 'urinalysis'=>['required'], 'albumin'=>['required'], 'sugar'=>['required'], 'ecgdate'=>['required'], 'othertestgiv'=>['required'], 'commenonhist'=>['required'], 'sigmedhis'=>['required'], 'abphyfinding'=>['required'], 'recommend'=>['required'],'disquadefects'=>['required'], 'amesignature'=>['required'], 'amecountry'=>['required'], 'tel'=>['required'], 'ameserialnum'=>['required'], 'amestate'=>['required'],'dnoted'=>['required'],'dateofexam'=>['required'],'amename'=>['required'],'ameaddre'=>['required'], 'amepcode'=>['required'], 'hrresult'=>['required'], 'bothcorear'=>['required'], 'gensys'=>['required'], 'abdescription'=>['required'], 'fivehuna'=>['required'], 'onethoua'=>['required'], 'twothoua'=>['required'], 'threethoua'=>['required'], 'audiospeechdis'=>['required']]);
    	 
         pel_medexam::create(request(['height', 'weight', 'soda','dnoted', 'sodasn', 'head', 'vascularsys', 'nose', 'sinuses', 'abdomen', 'anus', 'mouth', 'tfone', 'skin', 'ear', 'gusys', 'eardrum', 'extremities', 'eyes', 'spine', 'opthal', 'pupils', 'bodymarks', 'lymphatics', 'ocularotility', 'neurologic', 'lungsschest', 'psychiatric', 'hear', 'gensys', 'abdescription', 'audiospeechdis', 'fivehuna', 'onethoua', 'twothoua', 'threethoua', 'fourthoua','fivehunb', 'onethoub', 'twothoub', 'threethoub', 'fourthoub', 'colorresult', 'rightear', 'rightcorear', 'nearright', 'interright', 'leftear', 'leftcorear', 'nearleft', 'interleft', 'bothear', 'nearboth', 'interboth', 'fovision', 'esoph', 'exoph', 'lhyper', 'rhyper', 'systolic', 'pulse', 'diastolic', 'urinalysis', 'albumin', 'sugar', 'ecgdate', 'othertestgiv', 'commenonhist', 'sigmedhis', 'abphyfinding', 'recommend','disquadefects', 'amesignature', 'amecountry', 'pcode', 'tel', 'ameserialnum', 'amestate','dateofexam','amename','ameaddre','amepcode','hrresult','bothcorear','appid']));



        $message= "Record saved successfully";
        return view('/nav', ['message' => $message]);
    }

    public function update(Request $request, pel_medexam $pel_medexam)
    {
       
    	request()->validate([
    		'formClass' =>['required'], 'lname'=>['required'], 'fname'=>['required'], 'mname'=>['required'], 'pid'=>['required'], 'country'=>['required'], 'paddre'=>['required'], 'bstate'=>['required'], 'pcode'=>['required'], 'dob'=>['required'], 'hair'=>['required'], 'tfone'=>['required'], 'eyes'=>['required'], 'gender'=>['required']

    	]);

        $pel_medexam->update($request(['formClass', 'lname', 'fname', 'mname', 'pid', 'country', 'paddre', 'bstate', 'pcode', 'dob', 'hair', 'tfone', 'eyes', 'gender']));

         return redirect('/medexam');
    }

    public function delete(pel_medexam $pel_medexam)
    {
        $pel_medexam->delete();

         return redirect('/medexam');
    }


}
