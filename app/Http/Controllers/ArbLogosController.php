<?php

namespace App\Http\Controllers;

use App\Models\arblogo;
use Illuminate\Http\Request;

class ArbLogosController extends Controller
{
    public function logos()
    {
        $logodata = arblogo::all();
        return view('ArbLogos.index', compact('logodata'));
    }

    public function logosCreate()
    {
        return view('ArbLogos.create');
    }

    public function logosStore(Request $request)
    {
        $validation = $request->validate([
            'ArbLogo' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);

        $LogoData = new arblogo();

        if ($request->hasFile('ArbLogo')) {
            $ArbLogo = $request->file('ArbLogo');
            $imageName = time() . "." . $ArbLogo->getClientOriginalExtension();
            $ArbLogo->move(public_path('ArbLogoimag'), $imageName);
            $LogoData->ArbLogo = $imageName;
        }

        $LogoData->save();

        return redirect()->route('Arblogo')->with('success' , 'هل نجحت إضافة شعارك؟');
    }

    public function logosDelete($id){
        $logodata = arblogo::find($id);
        $logodata->delete();

        return redirect()->route('Arblogo')->with("success" , 'هل تم حذف صورة الشعار الخاص بك بنجاح؟');
    }

    public function logosEdit($id){
        $Arblogodata = arblogo::find($id);
        return view('ArbLogos.edit' , compact('Arblogodata'));
    }

    public function LogoUpdate(Request $req , $id){
     
            $LogoData = arblogo::find($id);
    
            if ($req->hasFile('ArbLogo')) {
                $ArbLogo = $req->file('ArbLogo');
                $imageName = time() . '.' . $ArbLogo->getClientOriginalExtension();
                $ArbLogo->move(public_path('ArbLogoimag'), $imageName);
                $LogoData->ArbLogo = $imageName;
            }
    
            $LogoData->save();
    
            return redirect()->route('Arblogo')->with('success', 'لقد تم تحديث بياناتك بنجاح');
        }
    
}
