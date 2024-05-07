<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArabHomeController extends Controller
{
    public function ArbHomeCreate()
    {
        // $HomeData = homepage::all();
        // return view('Home.index', compact('HomeData'));
        return view('ArabicHome.create');
    }

    // public function CreateHome()
    // {
    //     return view('Home.create');
    // }


    // public function HomeStore(Request $req)
    // {
    //     $homeCount = homepage::count();
    
    //     if ($homeCount < 3) {
    //         $validation = $req->validate([
    //             'HomeImg1' => 'required|image|mimes:jpeg,png,jpg,gif',
    //             'HomeHeading1' => 'required',
    //             // 'HomeHeading2' => 'required',
    //             // 'HomeHeading3' => 'required',
    //         ]);
    
    //         $HomeData = new Homepage();
    
    //         if ($req->hasFile('HomeImg1')) {
    //             $HomeImg1 = $req->file('HomeImg1');
    //             $imageName = time() . "." . $HomeImg1->getClientOriginalExtension();
    //             $HomeImg1->move(public_path('productimage'), $imageName);
    //             $HomeData->HomeImg1 = $imageName;
    //         }
    
    //         $HomeData->HomeHeading1 = $req->HomeHeading1;
    //         // $HomeData->HomeHeading2 = $req->HomeHeading2;
    //         // $HomeData->HomeHeading3 = $req->HomeHeading3;
    
    //         $HomeData->save();
    
    //         return redirect()->route('Home')->with('success', 'Data stored successfully!');
    //     } else {
    //         return redirect()->route('Home')->with('error', 'You Can only Create up to 3 Homes.');
    //     }
    // }
    
    
    
    
    // public function deleteHome($id){
    //     $HomeData = homepage::find($id);
    //     $HomeData->delete();
    //     return redirect()->route('Home')->with('success', 'Home Delete Successfully');
    // }



    // public function editHome($id)
    // {
    //     $homeData = homepage::find($id);     
    //     return view('Home.edit', compact('homeData'));
    // }

    // public function updateHome(Request $req, $id)
    // {
    //     $HomeData = homepage::find($id);

    //     $HomeData->HomeHeading1 = $req->HomeHeading1;

    //     if ($req->hasFile('HomeImg1')) {
    //         $HomeImg1 = $req->file('HomeImg1');
    //         $imageName = time() . '.' . $HomeImg1->getClientOriginalExtension();
    //         $HomeImg1->move(public_path('productimage'), $imageName);
    //         $HomeData->HomeImg1 = $imageName;
    //     }

    //     $HomeData->save();

    //     return redirect()->route('Home')->with('success', 'Your data has been successfully updated');
    // }


}
