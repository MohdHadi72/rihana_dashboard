<?php

namespace App\Http\Controllers;

use App\Models\arbcontactpage;
use Illuminate\Http\Request;

class ArbContactController extends Controller
{
    public function ArbContact(){
        $ArbContact = arbcontactpage::all();
        return view('ArbContact.index' , compact('ArbContact'));
    }
    public function ArbContactCreate(){
        return view('ArbContact.create');
    }

    public function ArbContactStore(Request $req){
       
        $ArbContactData = arbcontactpage::count();
    
        if ($ArbContactData < 1) {

         $validatedData = $req->validate([
            'ArbNumber' => 'required',
            'ArbAddress' => 'required',
            'ArbEmail' => 'required',

        ]);
            
        $ArbContactData = new arbcontactpage();
    
        $ArbContactData->ArbNumber = $req->ArbNumber;    
        $ArbContactData->ArbAddress = $req->ArbAddress;
        $ArbContactData->ArbEmail = $req->ArbEmail;
    
        $ArbContactData->save();

        return redirect()->route('ArbContact')->with('success','تمت إضافة بيانات الاتصال بنجاح');
    }else {
        return redirect()->route('ArbContact')->with('error', 'يمكنك فقط إنشاء ما يصل إلى الحد الأدنى: جهة اتصال واحدة.');
    }
    
}


// public function ArbContactDelete($id){
//     $ArbDeleteContact = arbcontactpage::find($id);
//     $ArbDeleteContact->delete();
//     return  redirect()->route('ArbContact')->with('success' , 'هل تم حذف بيانات الاتصال بنجاح؟'); 
// }


public function ArbContactEdit($id){
    $ArbContactData = arbcontactpage::find($id);
    return view('ArbContact.edit' , compact('ArbContactData'));

}


public function ArbContactUpdate(Request $req , $id){

    $ArbContactUpdate = arbcontactpage::find($id);
        
    $ArbContactUpdate->ArbNumber = $req->ArbNumber;
    $ArbContactUpdate->ArbAddress = $req->ArbAddress;
    $ArbContactUpdate->ArbEmail = $req->ArbEmail;
    
    
    $ArbContactUpdate->save();
    
    return redirect()->route('ArbContact')->with('success','تم تحديث بيانات الاتصال بنجاح');

}

}
