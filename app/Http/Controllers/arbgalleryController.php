<?php

namespace App\Http\Controllers;

use App\Models\arbgallerypage;
use Illuminate\Http\Request;

class arbgalleryController extends Controller
{
    public function ArbGallery(){
        $ArbGalleryData  =  arbgallerypage::all();
        return view('ArbGallery.index' , compact('ArbGalleryData'));
    }
    public function ArbGalleryCreate(){
        return view('ArbGallery.create');
    }


    public function ArbGalleryStore(Request $request)
    {

            $validation = $request->validate([
                'ArbGalleryImg' => 'required|image|mimes:jpeg,png,jpg,gif',
                'ArbImageHeading' => 'required',
                'ArbImageTitle' => 'required',
            ]);
    
            $ArbGalleryData = new arbgallerypage();

            if ($request->hasFile('ArbGalleryImg')) {
                $ArbGalleryImg = $request->file('ArbGalleryImg');
                $imageName = time() . "." . $ArbGalleryImg->getClientOriginalExtension();
                $ArbGalleryImg->move(public_path('ArbGalleryImg'), $imageName);
                $ArbGalleryData->ArbGalleryImg = $imageName;
            }
    
            $ArbGalleryData->ArbImageHeading = $request->ArbImageHeading;
            $ArbGalleryData->ArbImageTitle = $request->ArbImageTitle;
      
            $ArbGalleryData->save();
    
            return redirect()->route('ArbGallery')->with('success', 'تم تخزين بيانات المعرض بنجاح!');
        } 
        

        public function ArbGalleryDelete($id){
            $ArbGalleryDelete = arbgallerypage::find($id);
            $ArbGalleryDelete->delete();
            return redirect()->route('ArbGallery')->with('success', 'تم حذف بيانات المعرض بنجاح!');
        }

        public function ArbGalleryEdit($id){
            $EditGallery = arbgallerypage::find($id);
            return view('ArbGallery.edit' , compact('EditGallery'));
        }

        public function ArbGalleryUpdate(Request $req , $id)
        {
             
            $ArbGalleryData = arbgallerypage::find($id);

            $ArbGalleryData->ArbImageHeading = $req->ArbImageHeading;
            $ArbGalleryData->ArbImageTitle = $req->ArbImageTitle;   
    
            if ($req->hasFile('ArbGalleryImg')) {
                $ArbGalleryImg = $req->file('ArbGalleryImg');
                $imageName = time() . '.' . $ArbGalleryImg->getClientOriginalExtension();
                $ArbGalleryImg->move(public_path('ArbGalleryImg'), $imageName);
                $ArbGalleryData->ArbGalleryImg = $imageName;
            }
    
            $ArbGalleryData->save();
    
            return redirect()->route('ArbGallery')->with('success', 'تم تحديث بيانات المعرض الخاص بك بنجاح');
        }
        


}
