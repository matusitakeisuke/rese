<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoneController extends Controller
{
    public function index()
    { 
        return view('done');
    }

    public function done()
    {
        return redirect()->route('done');
    }
}
