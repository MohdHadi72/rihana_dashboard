<?php

namespace App\Http\Controllers;

use App\Models\Leaseform;
use Illuminate\Http\Request;

class LeaseformController extends Controller
{
  

public function store(Request $req) {
    $validatedData = $req->validate([
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required',
        'DateForApply' => 'required|date',
        'ProjectName' => 'required',
        'ProjectCategory' => 'required',
        'CapitalProject' => 'required',
        'NoOfEmployee' => 'required',
        'AreaRequired' => 'required',
        'ShopNo' => 'required',
        'RentType' => 'required',
        'MultisideShop' => 'required',
        'RentPeriod' => 'required',
        'ServiceRequiredByRahinaPark' => 'required',
        'InTheProject' => 'required',
        'Description' => 'required',
        
    ]);

    $formEntry = Leaseform::create($validatedData);
    
    return redirect()->route('indexEng');

}

public function form(){
     return view('Rihana.leaseform');
}
}
