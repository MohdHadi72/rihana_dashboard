<?php

namespace App\Http\Controllers;

use App\Models\ContactForm; // corrected class name
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // corrected import statement
use App\Mail\Sendmail; // assuming Sendmail is the Mailable class

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

       
        $formData = ContactForm::create($validatedData);

       
        Mail::to('info@raihanapark.com')->send(new Sendmail($validatedData));

        return redirect()->route('indexEng')->with('success' , "Your Form Data Sent Successfully");
    }
}
