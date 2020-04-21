<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;

class applhistoryController extends Controller
{
   public function index()
   {
        $num = auth()->user()->id;
        $person = pel_applicant::where ('userid','=',$num)->WhereNull('dacknowledge')->first();
        return view('applhistory', compact('person'));

   	
   }

   public function store(request $request)
   {
   		request()->validate([
            
            'daipre'=>['required'], 
            'drug1'=>['required_with:precrip1'], 
            'precrip1'=>['required_if:daipre,yes'], 
            'drug2'=>['required_with:precrip2'], 
            'drug3'=>['required_with:precrip3'], 
            'drug4'=>['required_with:precrip4'], 
            'drug5'=>['required_with:precrip5'], 
            'lense'=>['required'], 
            
            ]);
    	$num = auth()->user()->id;
    	$status=pel_applicant::updateOrCreate (
          ['userid'=>$num],
          ['daipre'=>$request->daipre, 
          'drug1'=>$request->drug1, 
          'precrip1'=>$request->precrip1, 
          'drug2'=>$request->drug2, 
          'precrip2'=>$request->precrip2, 
          'drug3'=>$request->drug3, 
          'precrip3'=>$request->precrip3, 
          'drug4'=>$request->drug4, 
          'precrip4'=>$request->precrip4, 
          'drug5'=>$request->drug5, 
          'precrip5'=>$request->precrip5, 
          'lense'=>$request->lense, 
          
          ]);
    	
      return redirect('applhistoryb');
   }
}

