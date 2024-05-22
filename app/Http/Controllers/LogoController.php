<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use Carbon\Carbon;

class LogoController extends Controller
{
    public function tech_web_logo_setting(){
        $logo = Logo::latest()->first();
        return view('super_admin.logo.add_logo',compact('logo'));
    }

    public function tech_web_store_logoimg(Request $request){

        // $file1 = $request->file('logo_image');
        // $fileName1 = date('YmdHi').$file1->getClientOriginalName();
        // $file1->move(public_path('logo/logo_img1'),$fileName1);
        // $save_url1 = 'logo/logo_img1/'.$fileName1; //insert photo into database

        // Logo::insert([
        //     'site_name' => $request->site_name,
        //     'logo_image' =>$save_url1,
        //     'created_at' => Carbon::now(),
        // ]);
        // toastr()->success('Logo Inserted Successfully');
        // return back();

        // dd($request);
        $id = $request->id;
        $old_img = $request->old_img;

        if($request->file('logo_image')){
            @unlink($old_img);
            $file1 = $request->file('logo_image');
            $fileName1 = date('YmdHi').$file1->getClientOriginalName();
            $file1->move(public_path('logo/logo_img1'),$fileName1);
            $save_url1 = 'logo/logo_img1/'.$fileName1; //insert photo into database

            Logo::findOrFail($id)->update([
                'site_name' => $request->site_name,
                'logo_image' =>$save_url1,

                'updated_at' => Carbon::now(),
            ]);
            toastr()->success('Logo Updated Successfully');
            return back();

        }else{

            // $file1 = $request->file('logo_image');
            // $fileName1 = date('YmdHi').$file1->getClientOriginalName();
            // $file1->move(public_path('logo/logo_img1'),$fileName1);
            // $save_url1 = 'logo/logo_img1/'.$fileName1;

            Logo::findOrFail($id)->update([
                'site_name' => $request->site_name,
                'updated_at' => Carbon::now(),
            ]);
            toastr()->success('Logo Inserted Successfully');
            return back();
        }


    }




}
