<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class TugasController extends Controller
{
    public function index()
    {
    	$c=siswa::all();
    	return view ('data',compact('c'));
    }
}
