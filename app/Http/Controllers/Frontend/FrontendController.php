<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Chat;
use App\Models\Logo;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductOrder;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use App\Models\WebsiteInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $webInfo = WebsiteInfo::first();
        $banners = Banner::all();
        $serviceCategories = ServiceCategory::all();
        $services = Service::inRandomOrder()->get();
        $products = Product::with(['product_category', 'offer' => function ($query) {
            $today = Carbon::today();
            $query->whereDate('start_date', '<=', $today)
                  ->whereDate('valid_till', '>=', $today);
        }])->inRandomOrder()->limit(12)->get();
        return view('Frontend.modules.index',compact('services','products','banners','webInfo','serviceCategories'));
    }

    public function about()
    {
        $aboutUs = AboutUs::first();
        $employees = User::where('role','employee')->where('employee_type','In House')->get();
        return view('Frontend.modules.about',compact('employees','aboutUs'));
    }

    public function services()
    {
        $serviceCategories = ServiceCategory::with('services')->get();
        // $services = $serviceCategories->services->paginate(32);
        return view('Frontend.modules.services',compact('serviceCategories'));
    }

    public function products()
    {
        $today = Carbon::today();
        $productCategories = ProductCategory::with(['products' => function ($query) use ($today) {
            $query->with(['offer' => function ($offerQuery) use ($today) {
                $offerQuery->whereDate('start_date', '<=', $today)
                            ->whereDate('valid_till', '>=', $today);
            }]);
        }])->get();

        return view('Frontend.modules.products',compact('productCategories'));
    }

    public function career()
    {
        $services = Service::all();
        return view('Frontend.modules.career',compact('services'));
    }

    public function contact()
    {
        $logo = Logo::latest()->first();
        $webInfo = WebsiteInfo::first();
        $services = Service::all();
        return view('Frontend.modules.contact',compact('services','webInfo','logo'));
    }

    public function invoice($id)
    {
        $logo = Logo::latest()->first();
        $webInfo = WebsiteInfo::first();
        $order = ProductOrder::find($id);
        $order->load('productOrderDetails','user');
        // dd($id,$order);
        return view('invoice',compact('webInfo','logo','order'));
    }


    public function search(Request $request)
    {
        $searchText = $request->search;
        $services = Service::where('name', 'like', '%' . $request->search . '%')->get();
        $products = Product::where('name', 'like', '%' . $request->search . '%')->get();
        return view('Frontend.modules.search',compact('services','products','searchText'));
    }
}
