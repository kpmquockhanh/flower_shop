<?php

namespace App\Http\Controllers;

use App\Flower;
use Darryldecode\Cart\Facades\CartFacade;
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
//        dd(CartFacade::session(Auth::guard('user')->id())->getContent());
        $viewData = [
          'flowers' => Flower::all(),
        ];
        if (Auth::check())
            $viewData = array_merge($viewData, ['carts'=> CartFacade::session(Auth::guard('user')->id())]);

        return view('home')->with($viewData);
    }

    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }
}
