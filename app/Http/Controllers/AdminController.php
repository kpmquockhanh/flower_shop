<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Flower;
use App\Order;
use App\Payment;
use App\Shipper;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flowers =  Flower::query()->get();
        $viewData = [
            'flower_num' => $flowers->count(),
            'flower_today_num' => $flowers ->filter(function ($value, $key) {return $value->created_at->toDateString() == Carbon::today()->toDateString();})->count(),
            'flower_show_num' => $flowers ->filter(function ($value, $key) {return $value->show;})->count(),
            'user_num' => User::query()->get()->count(),
            'saler_num' => Admin::query()->get()->count(),
            'order_num' => Order::query()->get()->count(),
            'payment_num' => Payment::query()->get()->count(),
            'shipper_num' => Shipper::query()->get()->count(),
        ];
//        dd($viewData);

        return view('backend.home')->with($viewData);
    }

    public function listAccount(Request $request)
    {

        $dataView = [
          'salers' => Admin::paginate(5),
          'queries' => $request->query(),
        ];

        return view('backend.salers.list')->with($dataView);

    }

    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }

}
