<?php

namespace App\Http\Controllers;

use App\Models\aboutpage;
use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\feature;
use App\Models\gallerypage;
use App\Models\homepage;
use App\Models\ourteam;
use Illuminate\Http\Request;

class RihanaControler extends Controller
{

  public function index()
  {
      return view('/RihanaDesign/index');
  }

  public function indexEng(){
    $aboutData = aboutpage::all();
    $OurTeamData = ourteam::all();
    $GalleryData = gallerypage::all();
    $ContactData = Contact::all();
    $HomeData = homepage::all();
    $FeatureData = feature::all();
    return view('/RihanaDesign/indexEng' , compact('aboutData' , 'OurTeamData' , 'GalleryData' , 'ContactData' , 'HomeData' , 'FeatureData'));
  }
  
  


}
