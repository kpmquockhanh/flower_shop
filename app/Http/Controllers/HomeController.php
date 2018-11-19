<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\CategoryFlower;
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
            'flowers' => Flower::query()->where('show',true)->orderByDesc('id')->take(4)->get(),
        ];
        if (Auth::check())
            $viewData = array_merge($viewData, [
                'carts'=> Cart::query()->with('flower')->where('user_id', Auth::guard('user')->id())->get(),
            ]);


        return view('frontend.home')->with($viewData);
    }

    public function viewShop(Request $request)
    {


        $flowers = Flower::query()->where('show',true);
//        dd($flowers);

        if ($cate_id = $request->cate)
        {
            $Cate = CategoryFlower::query()->where('category_id', $cate_id)->get(['flower_id']);

            $idsFlower = [];
            foreach($Cate->toArray() as $i) {
                $idsFlower[] = $i['flower_id'];
            }

            $flowers->whereIn('id', $idsFlower);
        }

        if ($request->s)
        {
            $flowers->where('name','like', '%'.$request->s.'%')
                    ->orWhere('message', 'like', '%'.$request->s.'%');
        }
        $flowers = $flowers->orderByDesc('id')->paginate(12);

        $toItem = $flowers->perPage() == $flowers->count() ?
            $flowers->currentPage() * $flowers->perPage():
            $flowers->count()?($flowers->currentPage()-1)*$flowers->perPage()+$flowers->count():0;
        $viewData = [
            'flowers' => $flowers,
            'toItem' => $toItem,
            'fromItem' => $toItem?$toItem-$flowers->count()+1:0,
            'queries' => $request->query(),
            'categories' => Category::query()->get(),
        ];
        if (Auth::check())
            $viewData = array_merge($viewData, ['carts'=> Cart::query()->with('flower')->where('user_id', Auth::guard('user')->id())->get()]);


        return view('frontend.shop')->with($viewData);
    }

    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }

    public function detailFlower(Request $request)
    {
        if ($request->id)
        {
            $viewData = [
                'flower' => Flower::findOrFail($request->id),
            ];
            if (Auth::check())
                $viewData = array_merge($viewData, ['carts'=> Cart::query()->with('flower')->where('user_id', Auth::guard('user')->id())->get()]);


            return view('frontend.detail')->with($viewData);
        }
        return redirect()->back();
    }

    public function viewQuick(Request $request)
    {
        if (!$request->id)
            return redirect()->back();

        $flower = Flower::find($request->id);

        if ($flower)
            return response()->json([
               'status' => true,
               'data' => view('frontend.layouts.quick-view')->with(['flower' => $flower])->render(),
            ]);
        else
            return response()->json([
                'status' => false,
            ]);

    }
}
