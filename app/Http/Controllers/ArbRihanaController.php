<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArbRihanaController extends Controller
{
    public function indexArb(){
        return view('RihanaDesign.indexArb');
    }
    public function Arabicindex(){
        return view('ArabicRihana.index');
    }
}
