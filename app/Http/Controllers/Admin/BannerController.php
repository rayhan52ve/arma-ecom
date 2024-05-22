<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('Admin.modules.settings.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'image',
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/banner/';
            $file->move(public_path($path), $filename);
            $validatedData['photo'] = $filename;
        }

        // Create a new banner
        Banner::create($validatedData);
        toastr()->success('Banner Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('Admin.modules.settings.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $validatedData = $request->validate([
            'photo' => 'image',
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $destination = 'uploads/banner/' . $banner->photo;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/banner/';
            $file->move(public_path($path), $filename);
            $validatedData['photo'] = $filename;
        }

        $banner->update($validatedData);
        toastr()->success('Banner Updated Successfully');
        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {

        $destination = 'uploads/banner/' . $banner->photo;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $banner->delete();
        toastr()->success('Banner Deleted Successfully');
        return redirect()->back();
    }
}
