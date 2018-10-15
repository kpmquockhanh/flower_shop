<?php

namespace App\Http\Controllers;

use App\Flower;
use Darryldecode\Cart\CartCondition;
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
//        $condition = new CartCondition(array(
//            'name' => 'VAT 12.5%',
//            'type' => 'tax',
//            'target' => 'cost', // this condition will be applied to cart's subtotal when getSubTotal() is called.
//            'value' => '10%',
//        ));
//        Cart::session($userId)->condition($condition);
        Cart::session($userId)->clearCartConditions();
        dd(Cart::session($userId)->getConditions());
    }

    public function getCart()
    {
        $userId = Auth::guard('user')->id();
        return Cart::session($userId)->getContent();
    }

    public function addToCart(Request $request)
    {
        if ($id = $request->id)
        {
            $userId = Auth::guard('user')->id();
            $flower = Flower::select([
                'id', 'name', 'price', 'image', 'quantity', 'saleoff'
            ])->findOrFail($id);

            if ($flower){
                $flower = $flower->toArray();
                $flower['quantity'] = 1;
            }

            $condition = new CartCondition(array(
                'name' => 'SALE 5%',
                'type' => 'tax',
                'value' => '-50%',
            ));
            Cart::session($userId)->add(array_merge($flower, [
                'attributes' => [
                    'image' => $flower['image'],
                    'saleoff' => $flower['saleoff']
                ],
                'conditions' => $condition,
            ]));

            return response()->json([
                'status' => true,
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
            $userId = Auth::guard('user')->id();
            Cart::session($userId)->remove($id);
            return response()->json([
                'status' => true,
            ]);

        }else
            return response()->json([
                'status' => false,
            ]);
    }
}
