<?php

namespace App\Http\Controllers;

use App\Models\logopage;
use Illuminate\Http\Request;

class LogoPageController extends Controller
{
    public function logos()
    {
        $logodata = logopage::all();
        return view('Logo.index' , compact('logodata'));
    }

    public function logosCreate()
    {
        return view('Logo.create');
    }

    public function logosStore(Request $request)
    {
        $validation = $request->validate([
            'Logo' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);

        $LogoData = new logopage();

        if ($request->hasFile('Logo')) {
            $Logo = $request->file('Logo');
            $imageName = time() . "." . $Logo->getClientOriginalExtension();
            $Logo->move(public_path('logos'), $imageName);
            $LogoData->Logo = $imageName;
        }

        $LogoData->save();

        return redirect()->route('logo')->with('success' , 'Your Logo  Successfully Add?');
    }

    public function logosDelete($id){
        $logodata = logopage::find($id);
        $logodata->delete();

        return redirect()->route('logo')->with("success" , 'Your Logo Image Delete Successfully?');
    }

    public function logosEdit($id){
        $logodata = logopage::find($id);
        return view('Logo.edit' , compact('logodata'));
    }

    public function LogoUpdate(Request $req , $id){
     
            $LogoData = logopage::find($id);
    
            if ($req->hasFile('Logo')) {
                $Logo = $req->file('Logo');
                $imageName = time() . '.' . $Logo->getClientOriginalExtension();
                $Logo->move(public_path('logos'), $imageName);
                $LogoData->Logo = $imageName;
            }
    
            $LogoData->save();
    
            return redirect()->route('logo')->with('success', 'Your data has been successfully updated');
        }
    


}
