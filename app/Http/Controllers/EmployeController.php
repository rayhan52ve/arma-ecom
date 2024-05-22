<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeController extends Controller
{
    public function tech_web_create_team()
    {   
        $teams = Team::orderBy('id','DESC')->get();
        return view('super_admin.employe.index',compact('teams'));
    }

    public function tech_web_store_team(Request $request)
    {
//        return $request;
        if($request->name){
            Team::insert([
                'team_name' => $request->name,                
                // 'team_name_bangla' => $request->team_name_bangla,                
                'created_at' => Carbon::now(),
            ]);
        }else{
            Team::insert([
                // 'team_name' => $request->name,                
                'team_name_bangla' => $request->team_name_bangla,                
                'created_at' => Carbon::now(),
            ]);
        }

            // Team::insert([
            //     'team_name' => $request->name,                
            //     'team_name_bangla' => $request->team_name_bangla,                
            //     'created_at' => Carbon::now(),
            // ]);

            toastr()->success('Employee Added Successfully');
            return back();

    }
    public function tech_web_edit_team($id)
    {
        return view('super_admin.employe.edit',[
            'team'=>Team::find($id),
        ]);
    }

    public function tech_web_update_team(Request $request)
    {
        $id = $request->id;

        if($request->team_name){
            Team::findOrFail($id)->update([
                'team_name' => $request->team_name,
                // 'team_name_bangla' => $request->team_name_bangla,
                'updated_at' => Carbon::now(),
            ]);           

        }else{
            Team::findOrFail($id)->update([
                // 'team_name' => $request->team_name,
                'team_name_bangla' => $request->team_name_bangla,
                'updated_at' => Carbon::now(),
            ]);            
        }
        
        toastr()->success('Team Updated Successfully');
            return redirect()->route('create.team');
        
    }
}
