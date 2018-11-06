<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $viewData = [];
        $carts = $this->getCart();
        if (Auth::check())
            $viewData = array_merge($viewData, [
                'carts'=> $carts,
                'subtotal' => $carts->sum(function ($item){
                    return $item->flower->price*$item->quantity;
                })]);
        return view('frontend.cart.cart-page')->with($viewData);
    }
    public function test()
    {
        $userId = Auth::guard('user')->id();

    }

    public static function getCart()
    {
        return Cart::query()->with('flower')->where('user_id', Auth::guard('user')->id())->get();
    }


    public function addToCart(Request $request)
    {
        if ($id = $request->id)
        {
            if (!Flower::find($id))
                return response()->json([
                    'status' => false,
                ]);


            $cart = Cart::query()
                ->where('user_id', Auth::guard('user')->id())
                ->where('flower_id', $id)
                ->get();

            if ($cart->count())
                $cart->first()->increment('quantity');
            else
            {
                Cart::create([
                    'user_id' => Auth::guard('user')->id(),
                    'flower_id' => $id,
                    'quantity' => $request->quantity?:1,
                ]);
            }

            return response()->json([
                'status' => true,
                'data' => view('frontend.cart.cart')->with(['carts' => $this->getCart()])->render(),
            ]);
        }else
            return response()->json([
                'status' => false,
            ]);

    }

    public function removeFromCart(Request $request)
    {
        if ($id = $request->id)
        {
            if (Cart::destroy($id))
                return response()->json([
                    'status' => true,
                    'data' => view('frontend.cart.cart')->with(['carts' => $this->getCart()])->render(),
                ]);
            else
                return response()->json([
                    'status' => true,
                ]);

        }else
            return response()->json([
                'status' => false,
            ]);
    }

    public static function cleartAll()
    {
        return Cart::query()->where('user_id', Auth::guard('user')->id())->delete();
    }

    public function clearAllCart()
    {
        if (Cart::query()->where('user_id', Auth::guard('user')->id())->delete())
        {
            return response()->json([
                'status' => true,
                'data' => view('frontend.cart.cart')->with(['carts' => $this->getCart()])->render(),
                'data_page' => view('frontend.cart.cart-page-ajax')->with(['carts' => $this->getCart()])->render(),
            ]);
        }
        else
            return response()->json([
                'status' => false,
            ]);
    }

    public function checkoutCart()
    {
        $viewData = [];
        $carts = $this->getCart();
        if (Auth::check())
            $viewData = array_merge($viewData, [
                'carts'=> $carts,
                'subtotal' => $carts->sum(function ($item){
                    return $item->flower->price*$item->quantity;
                })]);
        return view('frontend.checkout.checkout')->with($viewData);
    }
}
