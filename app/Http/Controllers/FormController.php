<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\contactform;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|numeric',
            'message' => 'required|string',
        ]);

       
        $formData = contactform::create($validatedData);
  
        return  redirect()->route('indexEng')->with('success' , "Your Form Data Send Successfully?");
    }
 
}
