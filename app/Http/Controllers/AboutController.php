<?php

namespace App\Http\Controllers;

use App\Models\aboutpage;
use App\Models\homepage;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $AboutData = aboutpage::all();
        return view('About.index' , compact('AboutData'));
    }
    public function AboutCreate()
    {
        return view('About.create');
    }
    public function AboutStore(Request $req)
    {
        $validatedData = $req->validate([
            'AboutHeadingOne' => 'required',
            'AboutHeadingTwo' => 'required',
            'AboutHeadingThree' => 'required',
            'AboutHeadingFour' => 'required',
            'AboutPeragraphOne' => 'required',
            'AboutPeragraphTwo' => 'required',
            'AboutPeragraphThree' => 'required',
            'AboutPeragraphFour' => 'required',
        ]);
            
        $aboutpage = new aboutpage();
    
        $aboutpage->AboutHeadingOne = $req->AboutHeadingOne;
        $aboutpage->AboutHeadingTwo = $req->AboutHeadingTwo;
        $aboutpage->AboutHeadingThree = $req->AboutHeadingThree;
        $aboutpage->AboutHeadingFour = $req->AboutHeadingFour;
    
        $aboutpage->AboutPeragraphOne = $req->AboutPeragraphOne;
        $aboutpage->AboutPeragraphTwo = $req->AboutPeragraphTwo;
        $aboutpage->AboutPeragraphThree = $req->AboutPeragraphThree;
        $aboutpage->AboutPeragraphFour = $req->AboutPeragraphFour;
    
        $aboutpage->save();
        return redirect()->route('aboutindex')->with('success','About Data Added Successfully');
        // return redirect()->with('success', '');
    }

    // public function editAbout()
    
    public function deleteAbout($id){
        $AboutData = aboutpage::find($id);
        $AboutData->delete();
        return redirect()->route('aboutindex')->with('success', 'About Delete Successfully');
    }

}
