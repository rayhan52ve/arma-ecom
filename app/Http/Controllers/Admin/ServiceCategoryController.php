<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_categories = ServiceCategory::all();
        return view('Admin.modules.service_category.index', compact('service_categories'));
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
            'service_category' => 'required|string|max:255',
            'image' => 'image',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/service_category/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        ServiceCategory::create($validatedData);
        toastr()->success('Service Category Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service_category = ServiceCategory::find($id);
        return view('Admin.modules.service_category.edit', compact('service_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service_category = ServiceCategory::find($id);
        $validatedData = $request->validate([
            'service_category' => 'required|string|max:255',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $destination = 'uploads/service_category/' . $service_category->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/service_category/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }
        $service_category->update($validatedData);
        toastr()->success('Service Category Updated Successfully');
        return redirect()->route('service-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_category = ServiceCategory::find($id);
        $destination = 'uploads/service_category/' . $service_category->image;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $service_category->delete();
        toastr()->success('Service Category Deleted Successfully');
        return redirect()->back();
    }
}
