<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_categories = ServiceCategory::all();
        $serviceSubCategories = ServiceSubCategory::with('service_category')->latest()->get();
        return view('Admin.modules.service_sub_category.index', compact('serviceSubCategories', 'service_categories'));
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
            'name' => 'required|string|max:255',
            'service_category_id' => 'required|exists:service_categories,id',
            'description' => 'nullable',
            'image' => 'image',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/service_sub_category/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        // Create a new serviceSubCategory
        ServiceSubCategory::create($validatedData);
        toastr()->success('Service Sub Category Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceSubCategory  $serviceSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceSubCategory $serviceSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceSubCategory  $serviceSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceSubCategory $serviceSubCategory)
    {
        $service_categories = ServiceCategory::all();
        return view('Admin.modules.service_sub_category.edit', compact('serviceSubCategory', 'service_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceSubCategory  $serviceSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceSubCategory $serviceSubCategory)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'service_category_id' => 'required|exists:service_categories,id',
            'description' => 'nullable',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $destination = 'uploads/service_sub_category/' . $serviceSubCategory->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/service_sub_category/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        $serviceSubCategory->update($validatedData);
        toastr()->success('Service Sub Category Updated Successfully');
        return redirect()->route('service-sub-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceSubCategory  $serviceSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceSubCategory $serviceSubCategory)
    {

        $destination = 'uploads/service_sub_category/' . $serviceSubCategory->image;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $serviceSubCategory->delete();
        toastr()->success('Service Sub Category Deleted Successfully');
        return redirect()->back();
    }
}
