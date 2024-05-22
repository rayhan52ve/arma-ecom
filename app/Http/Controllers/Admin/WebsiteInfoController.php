<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class WebsiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $webInfo = WebsiteInfo::first();
        return view('Admin.modules.settings.website_info.index',compact('webInfo'));
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
        $existingWebInfo = WebsiteInfo::first();

        if ($existingWebInfo) {
            $existingWebInfo->update($request->all());
        } else {
            WebsiteInfo::create($request->all());
        }
        toastr()->success('Website Info Updated Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebsiteInfo  $websiteInfo
     * @return \Illuminate\Http\Response
     */
    public function show(WebsiteInfo $websiteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebsiteInfo  $websiteInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(WebsiteInfo $websiteInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebsiteInfo  $websiteInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebsiteInfo $websiteInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebsiteInfo  $websiteInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebsiteInfo $websiteInfo)
    {
        //
    }
}
