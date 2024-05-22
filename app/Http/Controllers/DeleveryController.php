<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delevery;
use App\Models\User;
use App\Models\Team;
use App\Models\CuttingGround;
use Carbon\Carbon;

class DeleveryController extends Controller
{
    public function tech_web_cutting_ground(){
        $teams = Team::orderBy('id','DESC')->get();        
        $cut_grounds = CuttingGround::orderBy('id','DESC')->get();        
        return view('super_admin.delevery.add_delevery',compact('teams','cut_grounds'));
    }

    public function tech_web_store_ground(Request $request){
        // $qty = $request->quantity;
        // $amount = $request->amount;
        // $total_amount = $qty * 8;

        if($request->team_id && $request->quantity && $request->amount){
            CuttingGround::insert([
                'team_id' => $request->team_id,
                'quantity' => $request->quantity,                
                'amount' => $request->amount,            
                // 'total_amount' => $total_amount,            
                'created_at' => Carbon::now(),
            ]);

        }else{
            CuttingGround::insert([
                'team_id' => $request->team_id,                
                'quantity_bangla' => $request->quantity_bangla,                           
                'amount_bangla' => $request->amount_bangla,            
                // 'total_amount' => $total_amount,            
                'created_at' => Carbon::now(),
            ]);

        }
        
        toastr()->success('Product Stored Successfully');
            return back();

    }

    public function tech_web_edit_ground($id){
        $edit_ground = CuttingGround::find($id);
        $teams = Team::orderBy('id','DESC')->get();
        return view('super_admin.delevery.edit_delevery',compact('edit_ground','teams'));
    }

    public function tech_web_update_ground(Request $request){
        $id = $request->id;
        if($request->team_id && $request->quantity && $request->amount){
        CuttingGround::findOrFail($id)->update([
            'team_id' => $request->team_id,
            'quantity' => $request->quantity,
            'amount' => $request->amount,            
            // 'total_amount' => $total_amount,            
            'updated_at' => Carbon::now(),
        ]);
        }else{
            CuttingGround::findOrFail($id)->update([
                'team_id' => $request->team_id,
                'quantity_bangla' => $request->quantity_bangla,
                'amount_bangla' => $request->amount_bangla,            
                // 'total_amount' => $total_amount,            
                'updated_at' => Carbon::now(),
            ]);
        }
        toastr()->success('Cutting Ground Update Successfully');
            return redirect()->route('cutting.ground');
    }

    public function tech_web_delevery_list(){
        $products = Delevery::with('employee','customer')->orderBy('id','DESC')->get();
        return view('super_admin.delevery.delevery_list',compact('products'));
    }
}
