<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth:user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $viewData = [
          'flowers' => Flower::query()->orderByDesc('id')->take(4)->get(),
        ];
        if (Auth::check())
            $viewData = array_merge($viewData, ['carts'=> Cart::query()->with('flower')->where('user_id', Auth::guard('user')->id())->get()]);

        return view('frontend.home')->with($viewData);
    }

    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }

    public function detailFlower(Request $request)
    {
        $viewData = [
            'flowers' => Flower::query()->orderByDesc('id')->take(4)->get(),
        ];
        if (Auth::check())
            $viewData = array_merge($viewData, ['carts'=> Cart::query()->with('flower')->where('user_id', Auth::guard('user')->id())->get()]);

        return view('frontend.detail')->with($viewData);
    }
}
