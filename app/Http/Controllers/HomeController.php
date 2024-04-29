<?php

namespace App\Http\Controllers;

use App\Models\homepage;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class HomeController extends Controller
{
    // public function rihanaDash()
    // {
    //     return view('index');
    // }
    public function Homeindex()
    {
        $HomeData = homepage::all();
        return view('Home.index', compact('HomeData'));
    }
    
    public function CreateHome()
    {
        // $HomeCreate = homepage::all();// Correct the model name to Homepage
        return view('Home.create');
    }

    public function HomeStore(Request $req)
    {
        $validation = $req->validate([
            'HomeImg1' => 'required|image',
            'HomeImg2' => 'required|image',
            'HomeImg3' => 'required|image',
            'HomeHeading1' => 'required',
            'HomeHeading2' => 'required',
            'HomeHeading3' => 'required',
        ]);

        $imagePaths = [];
        foreach (['HomeImg1', 'HomeImg2', 'HomeImg3'] as $imageField) {
            $imagePaths[] = $req->file($imageField)->store('public');
        }

        homepage::create([
            'HomeImg1' => $imagePaths[0],
            'HomeImg2' => $imagePaths[1],
            'HomeImg3' => $imagePaths[2],
            'HomeHeading1' => $req->input('HomeHeading1'),
            'HomeHeading2' => $req->input('HomeHeading2'),
            'HomeHeading3' => $req->input('HomeHeading3')
        ]);

        return redirect()->route('Home')->with('success', 'Data stored successfully!');
    }


  
    public function indexGallery()
    {
        return view('Gallery.index');
    }
    public function indexFeatures()
    {
        return view('Features.index');
    }
}
