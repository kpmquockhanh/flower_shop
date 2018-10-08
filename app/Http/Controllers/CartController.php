<?php

namespace App\Http\Controllers;

use App\Flower;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        dd(123);
    }
    public function test()
    {
        $userId = Auth::guard('user')->id();

//        Cart::session($userId)->add(123, 'Sample Item111', 100.99, 2, array());
//        Cart::session($userId)->add(22, 'Sample Item111', 100.99, 2, array());

        dd(Cart::session($userId)->getContent());
    }

    public function getCart()
    {
        $userId = Auth::guard('user')->id();
        return Cart::session($userId);
    }

    public function addToCart(Request $request)
    {
        if ($id = $request->id)
        {
            $userId = Auth::guard('user')->id();
            $flower = Flower::select([
                'id', 'name', 'price', 'image', 'quantity', 'saleoff'
            ])->findOrFail($id);


            if ($flower)
                $flower = $flower->toArray();

            Cart::session($userId)->add(array_merge($flower, ['attributes' => ['image' => $flower['image']]]));

            return response()->json([
                'status' => true,
            ]);
        }else
            return response()->json([
                'status' => false,
            ]);

    }
}
