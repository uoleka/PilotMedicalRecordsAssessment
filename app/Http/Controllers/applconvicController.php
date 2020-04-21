<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_applicant;
class applconvicController extends Controller
{
    public function index()
    {
    	$num = auth()->user()->id;
        $person = pel_applicant::where ('userid','=',$num)->WhereNull('dacknowledge')->first();
        return view('applconvic', compact('person'));

    }

    Public function store(request $request)
    {
    	request()->validate(['alcho'=>['required'], 'nontraf'=>['required'], 'convicexpl'=>'required_if:alcho,==,yes|required_if:nontraf,==,yes', 'vhealth'=>['required'], 'dvprofesional1'=>['required_if:vhealth,yes'],  'vhealth1'=>['required_with:dvprofesional1'], 'vrhealth1'=>['required_with:dvprofesional1'], 'vhealth2'=>['required_with:dvprofesional2'], 'vrhealth2'=>['required_with:dvprofesional2'], 'vhealth3'=>['required_with:dvprofesional3'],'vrhealth3'=>['required_with:dvprofesional3']]);
    	$num = auth()->user()->id;
    	$status=pel_applicant::updateOrCreate (['userid'=>$num],['alcho'=>$request->alcho, 'nontraf'=>$request->nontraf, 'convicexpl'=>$request->convicexpl, 'vhealth'=>$request->vhealth, 'dvprofesional1'=>$request->dvprofesional1, 'dvprofesional2'=>$request->dvprofesional2, 'dvprofesional3'=>$request->dvprofesional3, 'vhealth1'=>$request->vhealth1, 'vrhealth1'=>$request->vrhealth1, 'vhealth2'=>$request->vhealth2, 'vrhealth2'=>$request->vrhealth2, 'vhealth3'=>$request->vhealth3,'vrhealth3'=>$request->vrhealth3]);
    	return redirect('appldec');
    }
}

