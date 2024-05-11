<?php

namespace App\Http\Controllers;

use App\Models\arbaboutpage;
use Illuminate\Http\Request;

class ArbAboutController extends Controller
{
   public function ArbAbout(){
    $ArbAboutData = arbaboutpage::all();
    return view('ArabicAbout.index' , compact('ArbAboutData'));
   } 
   public function ArbCreate(){
    return view('ArabicAbout.create');
   } 


   public function ArbAboutStore(Request $req)
   {
    //    $AboutCount = arbaboutpage::count();
   
    //    if ($AboutCount < 4) {

        $validatedData = $req->validate([
           'ArbAboutHeading' => 'required',
           'ArbAboutPeragraph' => 'required',

       ]);
           
       $ArbAboutPage = new arbaboutpage();
   
       $ArbAboutPage->ArbAboutHeading = $req->ArbAboutHeading;    
       $ArbAboutPage->ArbAboutPeragraph = $req->ArbAboutPeragraph;
   
       $ArbAboutPage->save();
       return redirect()->route('ArbAbout')->with('success','حول البيانات المضافة بنجاح');
       // return redirect()->with('success', '');
   }
//    else {
//        return redirect()->route('aboutindex')->with('error', 'You Can only Create up to Min: 4 About.?');
//    }

// }
       

public function ArbAboutDelete($id){
    $ArbAboutData = arbaboutpage::find($id);
    $ArbAboutData->delete();
    return redirect()->route('ArbAbout')->with('success', 'حول الحذف بنجاح');
}


public function ArbAboutEdit($id){
    $ArbAboutEdit = arbaboutpage::find($id);
    return view('ArabicAbout.edit' , compact('ArbAboutEdit'));
}



   public function ArbAboutUpdate(Request $req, $id)
    {
        $ArbAboutData = arbaboutpage::find($id);

        $ArbAboutData->ArbAboutHeading = $req->ArbAboutHeading;
        $ArbAboutData->ArbAboutPeragraph = $req->ArbAboutPeragraph;


        $ArbAboutData->save();

        return redirect()->route('ArbAbout')->with('success', 'لقد تم تحديث بياناتك حول بنجاح');
    }






}
