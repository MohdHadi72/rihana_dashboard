<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class contactController extends Controller
{
    public function contact(){
        $ContactData = Contact::all();
        return view('Contact.index' , compact('ContactData'));
    }
    
    public function ContactCreate(){
        return view('Contact.create');
    }

    public function ContactStore(Request $req){
       
            $ContactData = Contact::count();
        
            if ($ContactData < 1) {
    
             $validatedData = $req->validate([
                'Number' => 'required',
                'Address' => 'required',
                'Email' => 'required',
    
            ]);
                
            $ContactData = new Contact();
        
            $ContactData->Number = $req->Number;    
            $ContactData->Address = $req->Address;
            $ContactData->Email = $req->Email;
        
            $ContactData->save();

            return redirect()->route('contact')->with('success','Contact Data Added Successfully');
        }else {
            return redirect()->route('contact')->with('error', 'You Can only Create up to Min: 1 Contact.?');
        }
        
    }
    
    public function ContactDelete($id){
        $DeleteContact = Contact::find($id);
        $DeleteContact->delete();
        return redirect()->route('contact')->with('success','Contact Data Successfully Delete ');
    }
    
    public function ContactEdit($id){
        $ContactEdit = Contact::find($id);
        return view('Contact.edit', compact('ContactEdit'));
    }
    
    public function ContactUpdate(Request $req , $id){
        $ContactUpdate = Contact::find($id);
        
        $ContactUpdate->Number = $req->Number;
        $ContactUpdate->Address = $req->Address;
        $ContactUpdate->Email = $req->Email;
        
        
        $ContactUpdate->save();
        
        return redirect()->route('contact')->with('success','Contact Data Successfully Update ');
    }

    }

