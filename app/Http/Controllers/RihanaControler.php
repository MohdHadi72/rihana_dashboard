<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RihanaControler extends Controller
{

  public function index()
  {
      return view('/RihanaDesign/index');
  }

  public function indexEng(){
    return view('/RihanaDesign/indexEng');
  }
  public function indexArb(){
    return view('/RihanaDesign/indexArb');
  }
}
