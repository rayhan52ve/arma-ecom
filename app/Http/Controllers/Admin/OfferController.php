<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        return view('Admin.modules.offer.index', compact('offers'));
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
        Offer::create($request->all());
        toastr()->success('Offer Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        $products['noOffer'] = Product::where('offer_id', null)->latest()->get();
        $products['offer'] = Product::where('offer_id', $offer->id)->latest()->get();
        return view('Admin.modules.offer.edit', compact('offer', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->all());
        toastr()->success('Offer Updated Successfully');
        return redirect()->route('admin.offer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        toastr()->success('Offer Deleted Successfully');
        return redirect()->back();
    }

    public function updateOffer(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->remove) {
            $product->offer_id = null;
            $product->save();
        } else {
            $product->offer_id = $request->offer_id;
            $product->save();
        }

        return redirect()->back();
    }
}
