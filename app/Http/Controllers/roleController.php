<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\pel_role;
class roleController extends Controller
{
   Public function index()
   {
   	return view('nav');
   }

   Public function store()
   {

   }

   Public function show($name)
   {
   	$id = Auth()->user()->id;
   switch($name)
   {
   	case 'applicant';
   	break;
   	case 'ame';
   	break;
   	case 'ama';
   	break;
   	case 'caa';
   	break;

   }  

   }
   Public function update($id)
   {

   }
}
