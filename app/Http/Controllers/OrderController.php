<?php

namespace App\Http\Controllers;

use App\AddressDelivery;
use App\Cart;
use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request)
    {

        $orders = Order::with(['user', 'payment', 'shipper', 'address_delivery']);
        if ($search = $request->search)
        {
            $orders->orWhere('id', $search)
                ->orWhere('user_id', $search);
        }

        if ($sort = $request->sort)
        {
            $orders->orderBy($sort, 'desc');
        }

        $page = 8;
        if ($paginate = $request->paginate)
            $page = $paginate;

        $viewData = [
            'orders' => $orders->paginate($page),
            'queries' => $request->query(),
        ];

//        dd($viewData);
        return view('backend.orders.list')->with($viewData);

    }

    public function store(Request $request)
    {
        $rules = [
            'name' =>'required',
            'phone' =>'required',
            'address' =>'required',
        ];
        $this->validate($request,$rules);

        $data = $request->only([
            'name',
            'phone',
            'note',
            'address',
        ]);

//        dd($data);

        $order_id = Order::create([
            'user_id' => Auth::guard('user')->id(),
            'payment_id' => 1,
            'shipper_id' => 1,
            'transaction_status' => 0,
            'total_price' => CartController::getCart()->sum(function ($item){
                return $item->flower->price*$item->quantity;
            }),
        ]);

        foreach (CartController::getCart() as $item)
        {
            OrderProduct::create([
               'order_id' => $order_id->id,
               'flower_id' => $item->flower_id,
               'quantity' => $item->quantity,
            ]);
        }

        $data['order_id'] = $order_id->id;
        AddressDelivery::create($data);

        CartController::cleartAll();

        return redirect(route('home'));

    }
}
