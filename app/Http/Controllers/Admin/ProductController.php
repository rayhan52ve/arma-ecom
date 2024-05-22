<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\ProductSubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    private $subCategories;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::all();
        $product_sub_categories = ProductSubCategory::all();
        $products = Product::with(['product_category', 'offer' => function ($query) {
            $today = Carbon::today();
            $query->whereDate('start_date', '<=', $today)
                  ->whereDate('valid_till', '>=', $today);
        }])->latest()->get();
        return view('Admin.modules.product.index', compact('products', 'product_categories', 'product_sub_categories'));
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
            'product_category_id' => 'required|exists:product_categories,id',
            'product_sub_category_id' => 'required|exists:product_sub_categories,id',
            'price' => 'required',
            'discount_price' => 'nullable',
            'description' => 'nullable',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/product/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        $product = Product::create($validatedData);

        $imageData = [];

        if ($files = $request->file('photos')) {
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(1000, 9999) . '-' . time() . '.' . $extension;
                $path = 'uploads/product/gallery/';
                $file->move(public_path($path), $filename);

                $imageData[] = [
                    'product_id' => $product->id,
                    'photos' => $filename,
                ];
            }
        }

        ProductGallery::insert($imageData);

        toastr()->success('Product Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product_sub_categories = ProductSubCategory::all();
        $product_categories = ProductCategory::all();
        return view('Admin.modules.product.edit', compact('product', 'product_categories', 'product_sub_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:product_categories,id',
            'product_sub_category_id' => 'required|exists:product_sub_categories,id',
            'price' => 'required',
            'discount_price' => 'nullable',
            'description' => 'nullable',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $destination = 'uploads/product/' . $product->image;

            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/product/';
            $file->move(public_path($path), $filename);
            $validatedData['image'] = $filename;
        }

        $product->update($validatedData);

        $imageData = [];

        if ($files = $request->file('photos')) {
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(1000, 9999) . '-' . time() . '.' . $extension;
                $path = 'uploads/product/gallery/';
                $file->move(public_path($path), $filename);

                $imageData[] = [
                    'product_id' => $product->id,
                    'photos' => $filename,
                ];
            }
        }

        ProductGallery::insert($imageData);
        toastr()->success('Product Updated Successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $destination = 'uploads/product/' . $product->image;

        if (File::exists($destination)) {
            File::delete($destination);
        }

        if ($product->product_galleries) {
            foreach ($product->product_galleries as $galleryItem) {
                $galleryDestination = 'uploads/product/gallery/' . $galleryItem->photos;

                if (File::exists($galleryDestination)) {
                    File::delete($galleryDestination);
                }
            }
        }

        $product->delete();
        toastr()->success('Product Deleted Successfully');
        return redirect()->back();
    }

    public function productGalleryDestroy($id)
    {
        $productGallery = ProductGallery::find($id);
        $destination = 'uploads/product/gallery/' . $productGallery->photos;

        if (File::exists($destination)) {
            File::delete($destination);
        }


        $productGallery->delete();
        toastr()->success('Product Gallery Image Deleted Successfully');
        return redirect()->back();
    }

    public function getSubCategoryByCategory()
    {
       $this->subCategories = ProductSubCategory::where('product_category_id',$_GET['id'])->get();
        return response()->json($this->subCategories);
    }



}
