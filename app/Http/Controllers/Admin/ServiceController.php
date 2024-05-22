<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $service_categories = ServiceCategory::all();
        $services = Service::with('service_category')->latest()->get();
        return view('Admin.modules.service.index', compact('services', 'service_categories'));
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
            'service_charge' => 'required',
            'charge_type' => 'required|string',
            'description' => 'nullable',
            'image' => 'image',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/service/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        // Create a new service
        Service::create($validatedData);
        toastr()->success('Service Added Successfully');
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
        $service_categories = ServiceCategory::all();
        $service = Service::find($id);
        return view('Admin.modules.service.edit', compact('service', 'service_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'service_category_id' => 'required|exists:service_categories,id',
            'service_charge' => 'required',
            'charge_type' => 'required|string',
            'description' => 'nullable',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $destination = 'uploads/service/' . $service->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/service/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        $service->update($validatedData);
        toastr()->success('Service Updated Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

        $destination = 'uploads/service/' . $service->image;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        $service->delete();
        toastr()->success('Service Deleted Successfully');
        return redirect()->back();
    }

}
