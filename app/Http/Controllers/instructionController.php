<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class instructionController extends Controller
{
    Public function index ()
    {
    	return view('instructions');
    }

    Public function store()
    {
    	return back();
    }
}
