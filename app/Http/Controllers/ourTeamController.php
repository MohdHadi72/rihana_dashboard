<?php

namespace App\Http\Controllers;

use App\Models\ourteam;
use Illuminate\Http\Request;

class ourTeamController extends Controller
{
    public function Index(){
        $teamData = ourteam::all();
        return view('OurTeam.index' , compact('teamData'));
    }
    public function TeamCreate(){
        return view('OurTeam.create');
    }
    
    public function StoreTeamData(Request $request)
    {
        $teamCount = ourteam::count();
    
        if ($teamCount < 50) {
            $validation = $request->validate([
                'TeamImg' => 'required|image|mimes:jpeg,png,jpg,gif',
                'TeamPeragraph' => 'required',
                'TeamHeading' => 'required',
                'TeamPost' => 'required',
            ]);
    
            $teamData = new ourteam();
    // php artisan migrate:reset --path=/database/migrations/your_migration_file.php

            // Upload the image if present
            if ($request->hasFile('TeamImg')) {
                $teamImg = $request->file('TeamImg');
                $imageName = time() . "." . $teamImg->getClientOriginalExtension();
                $teamImg->move(public_path('ourteamimages'), $imageName);
                $teamData->TeamImg = $imageName;
            }
    
            $teamData->TeamPeragraph = $request->TeamPeragraph;
            $teamData->TeamHeading = $request->TeamHeading;
            $teamData->TeamPost = $request->TeamPost;
      
            $teamData->save();
    
            return redirect()->route('OurTeam')->with('success', 'Data stored successfully!');
        } else {
            return redirect()->route('OurTeam')->with('error', 'You can only create up to 3 team members.');
        }
    }

    public function deleteTeam($id){
        $deleteTeam = ourteam::find($id);
        $deleteTeam->delete();
        return redirect()->route('OurTeam')->with('success' , 'You Team Data Successfully Delete!');

    }

    public function EditTeam($id){
        $EditTeam = ourteam::find($id);
        return view('OurTeam.edit' , compact('EditTeam'));
    }

    public function UpdataTeam(Request $req , $id){

        $OurTeam = ourteam::find($id);

        $OurTeam->TeamPeragraph = $req->TeamPeragraph;
        $OurTeam->TeamHeading = $req->TeamHeading;   
        $OurTeam->TeamPost = $req->TeamPost;   

        if ($req->hasFile('TeamImg')) {
            $TeamImg = $req->file('TeamImg');
            $imageName = time() . '.' . $TeamImg->getClientOriginalExtension();
            $TeamImg->move(public_path('ourteamimages'), $imageName);
            $OurTeam->TeamImg = $imageName;
        }

        $OurTeam->save();

        return redirect()->route('OurTeam')->with('success', 'Your data has been successfully updated');
    }

    
    
}
