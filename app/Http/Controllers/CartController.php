<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $quantity = $request->quantity;
        $id = $request->product_id;

        $product = Product::with(['offer' => function ($query) {
            $today = Carbon::today();
            $query->whereDate('start_date', '<=', $today)
                ->whereDate('valid_till', '>=', $today);
        }])->find($id);

        $discountedPrice = 0;

        if ($product->offer) {
            if ($product->offer->offer_type == '৳') {
                $discountedPrice = $product->price - $product->offer->offer;
            } else {
                $discountedPrice = $product->price - ($product->price * ($product->offer->offer / 100));
            }
        } else {
            $discountedPrice = $product->discount_price ?? $product->price;
        }


        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $quantity,
            'price' => $discountedPrice,
            'weight' => 0,
            'options' => ['image' => $product->image],
        ];

        Cart::add($data);

        // Fetch the updated cart items
        $cartItems = cardArray();
        $updatedCartCount = count($cartItems);
        $updatedSubtotal = Cart::subTotal();

        return response()->json([
            'success' => true,
            'updatedCartCount' => $updatedCartCount,
            'updatedSubtotal' => $updatedSubtotal,
            'message' => 'Product added to cart'
        ], Response::HTTP_OK);
    }

    public function updateCart(Request $request, $id)
    {
        $rowId = $request->rowId;
        $quantity = $request->quantity;

        $data = [
            'rowId' => $rowId,
            'qty' => $quantity,
        ];

        Cart::update($rowId, $data);

        return response()->json(['message' => 'Cart Updated'], Response::HTTP_OK);
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);

        $cartItems = cardArray();
        $updatedCartCount = count($cartItems);
        $updatedCartSubtotal = Cart::subTotal();

        return response()->json([
            'success' => true,
            'updatedCartCount' => $updatedCartCount,
            'updatedCartSubtotal' => $updatedCartSubtotal,
        ]);
    }

    public function checkout(Request $request)
    {

        $cartItems = cardArray();
        $cartCount = count($cartItems);
        $subTotal = Cart::subTotal();

        $subTotal = floatval(str_replace(',', '', $subTotal));


        if ($request->inputCoupon) {
            $today = now();
            $coupon = Coupon::where('code', $request->inputCoupon)
                ->whereDate('start_date', '<=', $today)
                ->whereDate('valid_till', '>=', $today)
                ->first();

            $couponValue = @$coupon ? floatval($coupon->price) : 0;
            $couponValuePercentage = ($subTotal * $couponValue) / 100;
            if (@$coupon->price_type == '%') {
                $discountedSubTotal = $subTotal - $couponValuePercentage;
            } else {
                $discountedSubTotal = $subTotal - $couponValue;
            }

            if ($coupon) {
                toastr()->success('Coupon Added');
                return view('Frontend.modules.order.checkout', compact('coupon','couponValue','couponValuePercentage','discountedSubTotal', 'cartItems', 'cartCount', 'subTotal'));
            } else {
                toastr()->error('Coupon is invalid');
                return redirect()->back();
            }
        } else {
            return view('Frontend.modules.order.checkout', compact('cartItems', 'cartCount', 'subTotal'));
        }
    }
}
