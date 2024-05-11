<?php

namespace App\Http\Controllers;

use App\Models\ArbHome;
use App\Models\arbhomepage;
use Illuminate\Http\Request;

class ArabHomeController extends Controller
{
    public function ArbHome()
    {
      $ArbHomeData = arbhomepage::all();
        return view('ArabicHome.index' , compact('ArbHomeData'));
    }

    public function ArbCreate()
    {
        return view('ArabicHome.create');
    }


    public function ArbHomeStore(Request $req)
    {
        $validation = $req->validate([
            'ArbHomeImg1' => 'required|image|mimes:jpeg,png,jpg,gif',
            'ArbHomeHeading1' => 'required',
        ]);
    
        $ArbHomeData = new arbhomepage();
    
        if ($req->hasFile('ArbHomeImg1')) {
            $ArbHomeImg1 = $req->file('ArbHomeImg1');
            $imageName = time() . "." . $ArbHomeImg1->getClientOriginalExtension();
            $ArbHomeImg1->move(public_path('ArabicHomeImag'), $imageName);
            $ArbHomeData->ArbHomeImg1 = $imageName;
        }
    
        $ArbHomeData->ArbHomeHeading1 = $req->ArbHomeHeading1;
    
        $ArbHomeData->save();
    
        return redirect()->route('ArbHome')->with('success', 'تم تخزين بيانات الصفحة الرئيسية باللغة العربية بنجاح!');
    }

   
    
    
    
    public function ArbHomeDelete($id){
        $ArbHomeData = arbhomepage::find($id);
        $ArbHomeData->delete();
        return redirect()->route('ArbHome')->with('success', 'Arabic Home Delete Successfully');
    }



    public function ArbHomecreate($id)
    {
        $ArbhomeData = arbhomepage::find($id);     
        return view('ArabicHome.edit', compact('ArbhomeData'));
    }




    public function ArbHomeupdate(Request $req, $id)
    {
        $ArbHomeData = arbhomepage::find($id);

        $ArbHomeData->ArbHomeHeading1 = $req->ArbHomeHeading1;

        if ($req->hasFile('ArbHomeImg1')) {
            $ArbHomeImg1 = $req->file('ArbHomeImg1');
            $imageName = time() . '.' . $ArbHomeImg1->getClientOriginalExtension();
            $ArbHomeImg1->move(public_path('ArabicHomeImag'), $imageName);
            $ArbHomeData->ArbHomeImg1 = $imageName;
        }

        $ArbHomeData->save();

        return redirect()->route('ArbHome')->with('success', 'لقد تم تحديث بياناتك الرئيسية باللغة العربية بنجاح');
    }


}
