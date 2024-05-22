<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\LoadMistri;
use Carbon\Carbon;


class LoadMistriController extends Controller
{
    public function tech_web_load_mistri(){
        $teams = Team::orderBy('id','DESC')->get();        
        $load_mistri = LoadMistri::orderBy('id','DESC')->get();        
        return view('super_admin.load_mistri.add_loadmistri',compact('teams','load_mistri'));
    }

    public function tech_web_store_load_mistri(Request $request){
        // $qty = $request->quantity;
        // $amount = $request->amount;
        // $total_amount = $qty * 8;
        if($request->team_id && $request->van_count && $request->amount){
        LoadMistri::insert([
            'team_id' => $request->team_id,
            'van_count' => $request->van_count,
            'amount' => $request->amount,            
            // 'total_amount' => $total_amount,            
            'created_at' => Carbon::now(),
        ]);
    }else{
        LoadMistri::insert([
            'team_id' => $request->team_id,
            'van_count_bangla' => $request->van_count_bangla,
            'amount_bangla' => $request->amount_bangla,            
            // 'total_amount' => $total_amount,            
            'created_at' => Carbon::now(),
        ]); 
    }
        toastr()->success('Load-Mistri Stored Successfully');
            return back();

    }

    public function tech_web_eidt_load_mistri($id){
        $edit_loadmistri = LoadMistri::find($id);
        $teams = Team::orderBy('id','DESC')->get();
        return view('super_admin.load_mistri.edit_loadmistri',compact('edit_loadmistri','teams'));
    }

    public function tech_web_update_load_mistri(Request $request){
        $id = $request->id;

       if($request->team_id && $request->van_count && $request->amount){
        LoadMistri::findOrFail($id)->update([
            'team_id' => $request->team_id,
            'van_count' => $request->van_count,
            'amount' => $request->amount,            
            // 'total_amount' => $total_amount,            
            'updated_at' => Carbon::now(),
        ]);
    }else{
        LoadMistri::findOrFail($id)->update([
            'team_id' => $request->team_id,
            'van_count_bangla' => $request->van_count_bangla,
            'amount_bangla' => $request->amount_bangla,            
            // 'total_amount' => $total_amount,            
            'updated_at' => Carbon::now(),
        ]);
    }
        toastr()->success('Load Mistri Update Successfully');
            return redirect()->route('load.mistri');
    }
}
