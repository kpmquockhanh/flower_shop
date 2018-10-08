<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Flower;
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
//        return view('backend.flowers.list');
        return redirect(route('admin.flowers.list'));
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
