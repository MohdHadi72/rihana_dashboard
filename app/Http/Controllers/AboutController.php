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
        $AboutCount = aboutpage::count();
    
        if ($AboutCount < 4) {

         $validatedData = $req->validate([
            'AboutHeadingOne' => 'required',
            'AboutPeragraphOne' => 'required',

        ]);
            
        $aboutpage = new aboutpage();
    
        $aboutpage->AboutHeadingOne = $req->AboutHeadingOne;    
        $aboutpage->AboutPeragraphOne = $req->AboutPeragraphOne;
    
        $aboutpage->save();
        return redirect()->route('aboutindex')->with('success','About Data Added Successfully');
        // return redirect()->with('success', '');
    }else {
        return redirect()->route('aboutindex')->with('error', 'You Can only Create up to Min: 4 About.?');
    }

}

    public function deleteAbout($id){
        $AboutData = aboutpage::find($id);
        $AboutData->delete();
        return redirect()->route('aboutindex')->with('success', 'About Delete Successfully');
    }


    
    public function editHome($id)
    {
        $aboutData = aboutpage::find($id);     
        return view('About.edit', compact('aboutData'));
    }

    public function updateAbout(Request $req, $id)
    {
        $AboutData = aboutpage::find($id);

        $AboutData->AboutHeadingOne = $req->AboutHeadingOne;
        $AboutData->AboutPeragraphOne = $req->AboutPeragraphOne;


        $AboutData->save();

        return redirect()->route('aboutindex')->with('success', 'Your data has been successfully updated');
    }

    public function HomeDetailes()
    {
        $aboutData = aboutpage::all(); 
        return view('Rihana.About', compact('aboutData'));
    }



}
