<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pel_ame;
use App\pel_role;
class AmeregController extends Controller
{
   
        public function index()
    {
        $amereg = pel_ame::all();
        return view('amereg', compact('amereg'));
    }

    public function show(pel_ame $pel_ame)
    {
       return view('projects.show', compact('amereg'));
    }

    public function store(request $request)

    {
        // $this->authorize('create', $user);
        request()->validate([
          'name' =>['required'], 
          'dob'=>['required'], 
          'examaddre'=>['required'], 
          'licenseas'=>['required'], 
          'typlicense'=>['required'], 
          'instname'=>['required'], 
          'country'=>['required'], 
          'streetaddre'=>['required'], 
          'lnumber'=>['required'], 
          'city'=>['required'], 
          'lcountry'=>['required'], 
          'officefone'=>['required'],
          'medspec'=>['required'], 
          'ameauth'=>['required'], 
          'authlicense'=>['required'], 
          'schuni'=>['required'], 
          'unicountry'=>['required'], 
          'yrgrad'=>['required'], 
          'degreerecd'=>['required'], 
          'intschuni'=>['required'], 
          'intunicountry'=>['required'], 
          'inclusivedt'=>['required'], 
          'specialtytng'=>['required'], 
          'naminsti'=>['required'], 
          'inclusivedt2'=>['required'], 
          'pgcity'=>['required'], 
          'degrecert'=>['required'], 
          'typeprac'=>['required'], 
          'hprivi'=>['required'], 
          'pilot'=>['required'], 
          'aviationpilot'=>['required'], 
          'onduty'=>['required'], 
          'reserve'=>['required_unless:onduty,no'], 
          'service'=>['required_unless:onduty,no'], 
          'flightsurgeon'=>['required_unless:onduty,no'], 
          'limitedlicen'=>['required'], 
          'suspendlicen'=>['required'], 
          'refusedlicen'=>['required'], 
          'controlledhabit'=>['required'], 
          'doapplication'=>['required'], 
          'dsignature'=>['required'], 
          'medinsti'=>['required'], 
          'yearsofprac'=>['required'], 
          'remarks'=>['required_if:limitedlicen,yes']
          ]);

       /*
          $allowedfileExtension=['pdf', 'PDF'];
          $files = $request->file('fileupload');
          $filename = $files->getClientOriginalName();
          $extension = $files->getClientOriginalExtension();
          $check=in_array($extension,$allowedfileExtension);
          $extension=".".$extension;
          $count= pel_ame::count();
          $count = $count+1;
            
            $path = $request->file('fileupload')->storeAs
            ('/documents/library',"doc".$count.$extension, 'documents');
         */
         pel_ame::create([
          'name' => $request->name,
          'dob' => $request->dob,
          'examaddre' => $request->examaddre,
          'licenseas' => $request->licenseas,
          'typlicense' => $request->typlicense,
          'instname' => $request->instname,
          'country' => $request->country,
          'streetaddre' => $request->streetaddre,
          'lnumber' => $request->lnumber, 
          'city' => $request->city, 
          'lcountry' => $request->lcountry, 
          'officefone' => $request->officefone, 
          'medspec' => $request->medspec, 
          'ameauth' => $request->ameauth, 
          'authlicense' => $request->authlicense, 
          'schuni' => $request->schuni, 
          'unicountry' => $request->unicountry, 
          'yrgrad' => $request->yrgrad, 
          'degreerecd' => $request->degreerecd,
          'intschuni' => $request->intschuni,
          'intunicountry' => $request->intunicountry,
          'inclusivedt' => $request->inclusivedt,
          'specialtytng' => $request->specialtytng,
          'naminsti' => $request->naminsti,
          'inclusivedt2' => $request->inclusivedt2, 
          'pgcity' => $request->pgcity, 
          'degrecert' => $request->degrecert, 
          'typeprac' => $request->typeprac, 
          'hprivi' => $request->hprivi, 
          'pilot' => $request->pilot, 
          'aviationpilot' => $request->aviationpilot, 
          'onduty' => $request->onduty, 
          'reserve' => $request->reserve, 
          'service' => $request->service, 
          'flightsurgeon' => $request->flightsurgeon, 
          'boards' => $request->boards, 
          'specialsocie' => $request->specialsocie, 
          'aviationmedsocie' => $request->aviationmedsocie, 
          'limitedlicen' => $request->limitedlicen, 
          'suspendlicen' => $request->suspendlicen, 
          'refusedlicen' => $request->refusedlicen, 
          'controlledhabit' => $request->controlledhabit, 
          'doapplication' => $request->doapplication, 
          'dsignature' => $request->dsignature, 
          'profdegree' => $request->profdegree, 
          'medinsti' => $request->medinsti, 
          'yearsofprac' => $request->yearsofprac, 
          'remarks' => $request->remarks,
          'userid' => $request->userid, 
          //'cv' => $path,
        ]);
          $num = auth()->user()->id;
         pel_role::create(['userid' => $num, 'role' => 'ame']);
          $message = "Sorry Only Upload pdf file format";
          return redirect('nav');
            //}
          //}
        //$message= "Sorry Only Upload pdf file format";
        //Return view('amereg', compact('message'));
    }

    public function update(Request $request, pel_ame $pel_ame)
    {
       
        request()->validate([]);

        $pel_ame->update($request([]));

         return redirect('/amereg');
    }

    public function delete(pel_ame $pel_ame)
    {
        $pel_ame->delete();

         return redirect('/amereg');
    }

}
