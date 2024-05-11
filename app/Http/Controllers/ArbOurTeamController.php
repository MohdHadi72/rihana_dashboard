<?php

namespace App\Http\Controllers;

use App\Models\arbourteampage;
use Illuminate\Http\Request;

class ArbOurTeamController extends Controller
{
    public function ArbOurTeam(){
        $ArbOurTeam = arbourteampage::all();
        return view('ArbOurTeam.index' , compact('ArbOurTeam'));
    }
    public function ArbOurTeamCreate(){
        return view('ArbOurTeam.create');
    }

    public function ArbOurTeamStore(Request $request)
    {
        $ArbteamCount = arbourteampage::count();
    
        if ($ArbteamCount < 50) {
            $validation = $request->validate([
                'ArbTeamImg' => 'required|image|mimes:jpeg,png,jpg,gif',
                'ArbTeamPeragraph' => 'required',
                'ArbTeamHeading' => 'required',
                'ArbTeamPost' => 'required',
            ]);
    
            $ArbteamData = new arbourteampage();
    
            if ($request->hasFile('ArbTeamImg')) {
                $ArbTeamImg = $request->file('ArbTeamImg');
                $imageName = time() . "." . $ArbTeamImg->getClientOriginalExtension();
                $ArbTeamImg->move(public_path('ArbOurTeamImg'), $imageName);
                $ArbteamData->ArbTeamImg = $imageName;
            }
    
            $ArbteamData->ArbTeamPeragraph = $request->ArbTeamPeragraph;
            $ArbteamData->ArbTeamHeading = $request->ArbTeamHeading;
            $ArbteamData->ArbTeamPost = $request->ArbTeamPost;
      
            $ArbteamData->save();
    
            return redirect()->route('ArbOurTeam')->with('success', 'تم تخزين بيانات الفريق بنجاح!');
        } else {
            return redirect()->route('ArbOurTeam')->with('error', 'يمكنك إنشاء ما يصل إلى 3 أعضاء فقط في الفريق.');
        }
    }


    public function ArbOurTeamDelete($id){
        $ArbdeleteTeam = arbourteampage::find($id);
        $ArbdeleteTeam->delete();
        return redirect()->route('ArbOurTeam')->with('success' , 'لقد قمت بحذف بيانات فريقك بنجاح!');

    }

    public function ArbOurTeamEdit($id){
        $ArbOurTeam = arbourteampage::find($id);
        return view('ArbOurTeam.edit' , compact('ArbOurTeam'));
    }


    public function ArbOurTeamUpdate(Request $request , $id){

        $ArbOurTeam = arbourteampage::find($id);

        $ArbOurTeam->ArbTeamPeragraph = $request->ArbTeamPeragraph;
        $ArbOurTeam->ArbTeamHeading = $request->ArbTeamHeading;   
        $ArbOurTeam->ArbTeamPost = $request->ArbTeamPost;   

        if ($request->hasFile('ArbTeamImg')) {
            $ArbTeamImg = $request->file('ArbTeamImg');
            $imageName = time() . "." . $ArbTeamImg->getClientOriginalExtension();
            $ArbTeamImg->move(public_path('ArbOurTeamImg'), $imageName);
            $ArbOurTeam->ArbTeamImg = $imageName;
        }

        $ArbOurTeam->save();

        return redirect()->route('ArbOurTeam')->with('success', 'لقد تم تحديث بياناتك بنجاح');
    }



}
