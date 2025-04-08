<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function gettabel()
    { 
        return view('v_html.gettabel'); 
    } 

    public function getform()
    { 
        return view('v_html.getform'); 
    } 
}