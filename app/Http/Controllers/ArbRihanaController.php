<?php

namespace App\Http\Controllers;

use App\Models\arbhomepage;
use App\Models\arbaboutpage;
use App\Models\arbcontactpage;
use App\Models\arbgallerypage;
use App\Models\arblogo;
use App\Models\arbourteampage;
use Illuminate\Http\Request;

class ArbRihanaController extends Controller
{
    public function indexArb(){
        $ArbHomeData = arbhomepage::all();
        $ArbAboutData = arbaboutpage::all();
        $ArbOurTeam  = arbourteampage::all();
        $ArbContactData = arbcontactpage::all();
        $ArbGalleryData  = arbgallerypage::all();
        $ArblogoData = arblogo::all();
        return view('RihanaDesign.indexArb' , compact( 
            'ArbHomeData' , 
            'ArbAboutData' , 
            'ArbOurTeam' ,
             'ArbContactData',
             'ArbGalleryData',
             'ArblogoData'

        ));
    }
}   
