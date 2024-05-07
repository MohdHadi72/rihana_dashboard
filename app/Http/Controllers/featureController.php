<?php

namespace App\Http\Controllers;

use App\Models\feature;
use Illuminate\Http\Request;

class featureController extends Controller
{
    public function feature(){
        $FeatureData = feature::all();
        return view('feature.index' , compact('FeatureData'));
    }
 
    public function featureCreate(){
        return view("feature.create");
    }

    public function featureStore(Request $request){
        $FeatureCount = feature::count(); 
        if($FeatureCount < 4){
        $validatedData = $request->validate([
            'FeaturePeragraph' => 'required|string',
            'FeatureIcon' => 'required|image',
            'FeatureHeading' => 'required|string',
            'FeatureAbout' => 'required|string',
            'FeatureImage' => 'required|image',
        ]);

        $feature = new feature();
        $feature->FeaturePeragraph = $request->FeaturePeragraph;
        
        if ($request->hasFile('FeatureIcon')) {
            $FeatureIcon = $request->file('FeatureIcon');
            $imageName = time() . '.' . $FeatureIcon->getClientOriginalExtension();
            $FeatureIcon->move(public_path('iconsimage'), $imageName);
            $feature->FeatureIcon = $imageName;
        }
      
        $feature->FeatureHeading = $request->FeatureHeading;
        $feature->FeatureAbout = $request->FeatureAbout;

        if ($request->hasFile('FeatureImage')) {
            $FeatureImage = $request->file('FeatureImage');
            $imageName = time() . '.' . $FeatureImage->getClientOriginalExtension();
            $FeatureImage->move(public_path('featureimage'), $imageName);
            $feature->FeatureImage = $imageName;
        }

        $feature->save();

      return redirect()->route('feature.index')->with('success', 'Feature Data added successfully');
    }else {
            return redirect()->route('feature.index')->with('error', 'You can only create up to 4 Feature ?');
        }
    }
    

}
