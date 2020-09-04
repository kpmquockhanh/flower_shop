<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\CategoryFlower;
use App\Flower;
use App\Subscribe;
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
        $categories = Category::all();

        $flowerByCategoryId = [];
        foreach ($categories as $category)
        {
            $flowers = [];
            $cateFlowers = CategoryFlower::with('flower')
                ->where('category_id', $category->id)
                ->orderByDesc('id')
                ->take(4)->get();
            foreach ($cateFlowers as $cateFlower)
                $flowers[] = $cateFlower->flower;
            $flowerByCategoryId[$category->id] = $flowers;
        }

        $viewData = [
            'flowerByCategoryId' => $flowerByCategoryId,
            'hotFlowers' => Flower::query()->orderByDesc('views')->take(3)->get(),
        ];

        $admin_id = Auth::guard('user')->id();

        if (Auth::check())
            $viewData = array_merge(
                $viewData,
                [
                    'carts'=> Cart::query()->with('flower')->where('user_id', $admin_id)->get(),
                ]
            );

        return view('frontend.home')->with($viewData);
    }

    public function viewShop(Request $request)
    {
        $flowers = Flower::query()->where('show',true);

        if ($cate_id = $request->cate)
        {
            $cateFlowers = CategoryFlower::query()->where('category_id', $cate_id)->pluck('flower_id');
            $flowers->whereIn('id', $cateFlowers);
        }
        if ($price = $request->price)
            $flowers->where('price','>=', $price);

        if ($request->s)
        {
            $flowers->where('name','like', '%'.$request->s.'%')
                    ->orWhere('message', 'like', '%'.$request->s.'%');
        }
        switch ($request->orderby) {
            case 'date': $flowers->orderBy('created_at', 'desc'); break;
            case 'price': $flowers->orderBy('price'); break;
            case 'price-desc': $flowers->orderBy('price', 'desc'); break;
            default: $flowers->orderByDesc('id');
        }


        $flowers = $flowers->paginate(12);

        $toItem = $flowers->perPage() == $flowers->count() ?
            $flowers->currentPage() * $flowers->perPage():
            $flowers->count()?($flowers->currentPage()-1)*$flowers->perPage()+$flowers->count():0;
        $viewData = [
            'flowers' => $flowers,
            'toItem' => $toItem,
            'fromItem' => $toItem?$toItem-$flowers->count()+1:0,
            'queries' => $request->query(),
            'categories' => Category::query()->get(),
            'hotFlowers' => Flower::query()->orderByDesc('views')->take(3)->get(),
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
        if ($id = $request->id)
        {
            $flower = Flower::with('categories')->findOrFail($id);
            $id_related = (array_column($flower->categories->toArray(), 'category_id'));
            $viewData = [
                'flower' => Flower::query()->findOrFail($request->id),
                'relatedFlowers' => Flower::whereHas('categories', function ($q) use($id_related, $flower){
                    $q->whereIn('category_id', $id_related);
                })->where('id', '<>', $id)->take(5)->get(),
            ];
            if (Auth::check())
                $viewData = array_merge($viewData, [
                    'carts'=> Cart::query()->with('flower')->where('user_id', Auth::guard('user')->id())->get(),

                ]);

            $flower->increment('views');
            return view('frontend.detail')->with($viewData);
        }
        return redirect()->back();
    }

    public function viewQuick(Request $request)
    {
        if (!$request->id)
            return redirect()->back();

        $flower = Flower::find($request->id);

        if ($flower){
            $flower->increment('views');
            return response()->json([
                'status' => true,
                'data' => view('frontend.layouts.quick-view')->with(['flower' => $flower])->render(),
            ]);
        } else
            return response()->json([
                'status' => false,
            ]);

    }
    public function addSub(Request $request)
    {
        $this->validate($request, ['email' => 'required|email|unique:subscribes']);

        $createData = $request->only([
            'email'
        ]);

        Subscribe::query()->create($createData);

        return redirect(route('home'));
    }
}
