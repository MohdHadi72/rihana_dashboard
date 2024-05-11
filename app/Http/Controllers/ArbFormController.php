<?php

namespace App\Http\Controllers;

use App\Models\contactform;
use Illuminate\Http\Request;

class ArbFormController extends Controller
{
    public function ArbFormStore(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|numeric',
            'message' => 'required|string',
        ]);

       
        $formData = contactform::create($validatedData);
  
        return  redirect()->route('indexArb')->with('success' , "هل تم إرسال بيانات النموذج الخاص بك بنجاح؟");
    }
 
}
