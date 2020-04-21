<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_ama;
use App\pel_role;
class AmaregController extends Controller
{
   
        public function index()
    {
        $amareg = pel_ama::all();
        return view('amareg', compact('amareg'));
    }

    public function show(pel_ama $pel_ama)
    {
       return view('projects.show', compact('amareg'));
    }

    public function store()

    {
         $this->authorize('create', $user);
        request()->validate(['name' =>['required'], 'dob'=>['required'], 'examaddre'=>['required'], 'licenseas'=>['required'], 'typlicense'=>['required'], 'instname'=>['required'], 'country'=>['required'], 'streetaddre'=>['required'], 'lnumber'=>['required'], 'city'=>['required'], 'lcountry'=>['required'], 'officefone'=>['required'],'medspec'=>['required'], 'ameauth'=>['required'], 'authlicense'=>['required'], 'schuni'=>['required'], 'unicountry'=>['required'], 'yrgrad'=>['required'], 'degreerecd'=>['required'], 'intschuni'=>['required'], 'intunicountry'=>['required'], 'inclusivedt'=>['required'], 'specialtytng'=>['required'], 'naminsti'=>['required'], 'inclusivedt2'=>['required'], 'pgcity'=>['required'], 'degrecert'=>['required'], 'typeprac'=>['required'], 'hprivi'=>['required'], 'pilot'=>['required'], 'aviationpilot'=>['required'], 'onduty'=>['required'], 'reserve'=>['required'], 'service'=>['required'], 'flightsurgeon'=>['required'], 'boards'=>['required'], 'specialsocie'=>['required'], 'aviationmedsocie'=>['required'], 'limitedlicen'=>['required'], 'suspendlicen'=>['required'], 'refusedlicen'=>['required'], 'controlledhabit'=>['required'], 'doapplication'=>['required'], 'dsignature'=>['required'], 'profdegree'=>['required'], 'medinsti'=>['required'], 'yearsofprac'=>['required'], 'remarks'=>['required']]);
         
         pel_ama::create(request(['name','dob','examaddre','licenseas','typlicense','instname','country','streetaddre','lnumber', 'city', 'lcountry', 'officefone', 'medspec', 'ameauth', 'authlicense', 'schuni', 'unicountry', 'yrgrad', 'degreerecd','intschuni','intunicountry','inclusivedt','specialtytng','naminsti','inclusivedt2', 'pgcity', 'degrecert', 'typeprac', 'hprivi', 'pilot', 'aviationpilot', 'onduty', 'reserve', 'service', 'flightsurgeon', 'boards', 'specialsocie', 'aviationmedsocie', 'limitedlicen', 'suspendlicen', 'refusedlicen', 'controlledhabit', 'doapplication', 'dsignature', 'profdegree', 'medinsti', 'yearsofprac', 'remarks','userid']));
          $num = auth()->user()->id;
         pel_role::create(['userid' => $num, 'role' => 'ama']);

        return redirect('nav');
    }

    public function update(Request $request, pel_ama $pel_ama)
    {
       
        request()->validate([]);

        $pel_ama->update($request([]));

         return redirect('/amareg');
    }

    public function delete(pel_ama $pel_ama)
    {
        $pel_ama->delete();

         return redirect('/amareg');
    }

}
