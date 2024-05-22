<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUs = AboutUs::first();
        return view('Admin.modules.settings.about_us.index', compact('aboutUs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aboutUs = AboutUs::first();

        $validatedData = $request->validate([
            'image' => 'image',
            'description' => 'required',
        ]);

        if ($aboutUs) {
            if ($request->hasFile('image')) {
                $destination = 'uploads/about_us/' . $aboutUs->image;

                if (File::exists($destination)) {
                    File::delete($destination);
                }

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = 'uploads/about_us/';
                $file->move(public_path($path), $filename);
                $validatedData['image'] = $filename;
            }

            $aboutUs->update($validatedData);
            toastr()->success('About Us Updated Successfully');
        } else {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $path = 'uploads/about_us/';
                $file->move(public_path($path), $filename);
                $validatedData['image'] = $filename;
            }

            AboutUs::create($validatedData);
            toastr()->success('About Us Created Successfully');
        }

        return back();
    }

}
