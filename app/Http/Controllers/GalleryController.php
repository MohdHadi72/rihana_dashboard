<?php

namespace App\Http\Controllers;

use App\Models\gallerypage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $GalleryData = gallerypage::all();
        return view('Gallery.index' , compact('GalleryData'));
    }
    public function CreateGallery(){
        return view('Gallery.create');
    }

     
    public function GalleryStore(Request $request)
    {

            $validation = $request->validate([
                'GalleryImg' => 'required|image|mimes:jpeg,png,jpg,gif',
                'ImageHeading' => 'required',
                'ImageTitle' => 'required',
            ]);
    
            $GalleryData = new gallerypage();

            if ($request->hasFile('GalleryImg')) {
                $GalleryImg = $request->file('GalleryImg');
                $imageName = time() . "." . $GalleryImg->getClientOriginalExtension();
                $GalleryImg->move(public_path('gallerys'), $imageName);
                $GalleryData->GalleryImg = $imageName;
            }
    
            $GalleryData->ImageHeading = $request->ImageHeading;
            $GalleryData->ImageTitle = $request->ImageTitle;
      
            $GalleryData->save();
    
            return redirect()->route('Gallery')->with('success', 'Gallery Data stored successfully!');
        } 
        
        public function GalleryDelete($id){
            $GalleryDelete = gallerypage::find($id);
            $GalleryDelete->delete();
            return redirect()->route('Gallery')->with('success', 'Gallery Data  successfully Delete!');
            

        }

        public function GalleryEdit($id){
            $EditGallery = gallerypage::find($id);
            return view('Gallery.edit' , compact('EditGallery'));
        }

        public function UpdateGallery(Request $req , $id)
        {
             
            $GalleryData = gallerypage::find($id);

            $GalleryData->ImageHeading = $req->ImageHeading;
            $GalleryData->ImageTitle = $req->ImageTitle;   
    
            if ($req->hasFile('GalleryImg')) {
                $GalleryImg = $req->file('GalleryImg');
                $imageName = time() . '.' . $GalleryImg->getClientOriginalExtension();
                $GalleryImg->move(public_path('gallerys'), $imageName);
                $GalleryData->GalleryImg = $imageName;
            }
    
            $GalleryData->save();
    
            return redirect()->route('Gallery')->with('success', 'Your Gallery data has been successfully updated');
        }
    
                   
                 

    
}
