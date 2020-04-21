<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;

class applhistorybController extends Controller
{
   public function index()
   {
   $num = auth()->user()->id;
        $person = pel_applicant::where ('userid','=',$num)->WhereNull('dacknowledge')->first();
        return view('applhistoryb', compact('person'));
   }

   public function store(request $request)
   {
         
      if (
         $request->epilepsy == 'yes' || 
         $request->motionSickness == 'yes' || 
         $request->depreession == 'yes' || 
         $request->discharge == 'yes' || 
         $request->rejection == 'yes' || 
         $request->insurance == 'yes' || 
         $request->admission == 'yes' || 
         $request->alcohol == 'yes' ||
         $request->failedTest == 'yes' || 
         $request->surgery == 'yes' || 
         $request->diabetes == 'yes' ||
         $request->fdisorder == 'yes' ||
         $request->fglaucoma == 'yes' ||
         $request->fmental == 'yes' ||
         $request->fcholesterol == 'yes' ||
         $request->fepilepsy == 'yes' ||
         $request->fallergies == 'yes' ||
         $request->fdiabetes == 'yes' ||
         $request->ftuberculosis == 'yes' ||
         $request->headache == 'yes' ||
         $request->dizziness == 'yes' ||
         $request->unconsciousness == 'yes' ||  
         $request->glasses == 'yes' ||
         $request->allergy == 'yes' ||
         $request->asthma == 'yes' ||
         $request->vascular == 'yes' ||
         $request->bloodPressure == 'yes' ||
         $request->stomach == 'yes' ||
         $request->kidney == 'yes' ||
         $request->suicide == 'yes' 
      )
      {
      request()->validate([
            'epilepsy'=>['required'], 
            'depreession'=>['required'], 
            'motionSickness'=>['required'], 
            'discharge'=>['required'], 
            'rejection'=>['required'], 
            'insurance'=>['required'], 
            'admission'=>['required'], 
            'alcohol'=>['required'], 
            'failedTest'=>['required'], 
            'surgery'=>['required'], 
            'diabetes'=>['required'],
            'fdisorder'=>['required'], 
            'fglaucoma'=>['required'], 
            'fmental'=>['required'], 
            'fcholesterol'=>['required'],
            'fepilepsy'=>['required'], 
            'fallergies'=>['required'], 
            'fdiabetes'=>['required'], 
            'ftuberculosis'=>['required'], 
            'headache'=>['required'], 
            'dizziness'=>['required'], 
            'unconsciousness'=>['required'], 
            'glasses'=>['required'], 
            'allergy'=>['required'], 
            'asthma'=>['required'], 
            'vascular'=>['required'], 
            'bloodPressure'=>['required'], 
            'stomach'=>['required'], 
            'kidney'=>['required'], 
            'suicide'=>['required'],
            'medexplanation'=>['required'],
            ]);
      }
      else {
         request()->validate([
            'epilepsy'=>['required'], 
            'depreession'=>['required'], 
            'motionSickness'=>['required'], 
            'discharge'=>['required'], 
            'rejection'=>['required'], 
            'insurance'=>['required'], 
            'admission'=>['required'], 
            'alcohol'=>['required'], 
            'failedTest'=>['required'], 
            'surgery'=>['required'], 
            'diabetes'=>['required'],
            'fdisorder'=>['required'], 
            'fglaucoma'=>['required'], 
            'fmental'=>['required'], 
            'fcholesterol'=>['required'],
            'fepilepsy'=>['required'], 
            'fallergies'=>['required'], 
            'fdiabetes'=>['required'], 
            'ftuberculosis'=>['required'], 
            'headache'=>['required'], 
            'dizziness'=>['required'], 
            'unconsciousness'=>['required'], 
            'glasses'=>['required'], 
            'allergy'=>['required'], 
            'asthma'=>['required'], 
            'vascular'=>['required'], 
            'bloodPressure'=>['required'], 
            'stomach'=>['required'], 
            'kidney'=>['required'], 
            'suicide'=>['required'],
            ]);         

      }
         
    	$num = auth()->user()->id;
    	$status=pel_applicant::updateOrCreate (
          ['userid'=>$num],
          [ 
             'epilepsy'=>$request->epilepsy, 
             'motionSickness'=>$request->motionSickness, 
             'depreession'=>$request->depreession, 
             'discharge'=>$request->discharge, 
             'rejection' =>$request->rejection,
             'insurance'=>$request->insurance, 
             'admission'=>$request->admission, 
             'alcohol'=>$request->alcohol, 
             'failedTest'=>$request->failedTest, 
             'surgery'=>$request->surgery, 
             'diabetes'=>$request->diabetes, 
             'fdisorder'=>$request->fdisorder, 
             'fglaucoma'=>$request->fglaucoma, 
             'fmental'=>$request->fmental, 
             'fcholesterol'=>$request->fcholesterol,
             'fepilepsy'=>$request->fepilepsy, 
             'fallergies'=>$request->fallergies, 
             'fdiabetes'=>$request->fdiabetes, 
             'ftuberculosis'=>$request->ftuberculosis, 
             'medexplanation'=>$request->medexplanation,
             'headache'=>$request->headache,
             'dizziness'=>$request->dizziness, 
             'unconsciousness'=>$request->unconsciousness,  
             'glasses'=>$request->glasses, 
             'allergy'=>$request->allergy, 
             'asthma'=>$request->asthma, 
             'vascular'=>$request->vascular, 
             'bloodPressure'=>$request->bloodPressure, 
             'stomach'=>$request->stomach, 
             'kidney'=>$request->kidney, 
             'suicide'=>$request->suicide
             ]);
    	return redirect('applconvic');
   }
}
