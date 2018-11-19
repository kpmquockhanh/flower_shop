<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryFlower;
use App\Flower;
use App\Http\Requests\FlowerEditRequest;
use App\Http\Requests\FlowerRequest;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use function Tinify\fromFile;
use function Tinify\setKey;

class FlowerController extends Controller
{
    public function index(Request $request)
    {

        $flowers = Flower::with('admin');
//
//        // open file a image resource
//        $img = Image::make('images/'.$flowers->first()->image);
//        // crop image
//        $img->crop(100, 100, 25, 25);
//        dd($img->save());
//        dd($flowers->first());
        if (Auth::guard('admin')->user()->type != 3 )
            $flowers->where('admin_id', Auth::guard('admin')->id());

        if ($search = $request->search)
        {
            $flowers->Where('name','like', '%'.$search.'%')
                    ->orWhere('message','like', '%'.$search.'%');
        }

        if ($sort = $request->sort)
        {
            $flowers->orderBy($sort, 'desc');
        }

        $page = 12;
        if ($paginate = $request->paginate)
            $page = $paginate;

        $viewData = [
            'flowers' => $flowers->paginate($page),
            'queries' => $request->query(),
        ];

        return view('backend.flowers.list')->with($viewData);
    }

    public function create()
    {

        $viewData = [
            'categories' => Category::all(),
        ];

        return view('backend.flowers.add')->with($viewData);
    }

    public function store(FlowerRequest $request)
    {
        $data = $request->only([
            'name',
            'show',
            'message',
            'saleoff',
            'price',
            'quantity',
        ]);

        $data['admin_id'] = Auth::guard('admin')->user()->id;

        if (isset($data['show']))
            $data['show'] = $data['show']==='on'? true : false;

        if ($image = $request->image)
        {
            $data['image'] = $this->processImage($image);
        }


        $flower_inserted = Flower::create(array_merge($data));

        foreach ($request->categories as $category)
        {
            CategoryFlower::create([
                'flower_id' => $flower_inserted->id,
                'category_id' => $category,
            ]);
        }

        return redirect(route('admin.flowers.list'));
    }

    public function edit($id)
    {
        if ($id)
        {
            $flower = Flower::with('categories')->find($id);


            if (!$flower->canChange())
            {
                return redirect(route('admin.flowers.list'))->withErrors(['noPermission' => 'Bạn không có quyền thay đổi']);
            }
            $viewData = [
                'categories' => Category::all(),
                'flower' => $flower,
            ];



            if ($flower)
                return view('backend.flowers.edit')->with($viewData);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function update(FlowerEditRequest $request)
    {

        if ($id = $request->id)
        {
            $flower = Flower::find($id);

            if (!$flower->canChange())
            {
                return redirect(route('admin.flowers.list'))->withErrors(['noPermission' => 'Bạn không có quyền thay đổi']);
            }

            if ($flower)
            {
                $data = $request->only([
                    'name',
                    'show',
                    'message',
                    'saleoff',
                    'price',
                    'quantity',
                    'image',
                ]);
                if (isset($data['show']))
                    $data['show'] = $data['show']==='on'? true : false;
                else
                    $data['show'] = false;

                if ($image = $request->image)
                {
                   \Illuminate\Support\Facades\File::delete(public_path('images').'\\'.$flower->image);
                    $data['image'] = $this->processImage($image);
                }


                //Update category of flower
                $requestCate = $request->categories;
                $currentCate = array_column($flower->categories->toArray(),'category_id');

                $deleteCate = array_diff($currentCate, $requestCate);
                CategoryFlower::query()->where('flower_id', $id)->whereIn('category_id',$deleteCate)->delete();

                $flower->update($data);



                return redirect(route('admin.flowers.list'));
            }
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        if ($id = $request->id)
        {
            \Illuminate\Support\Facades\File::delete(public_path('images').'\\'.Flower::findOrFail($id)->image);
            if (Flower::destroy($id))
                return response()->json([
                'status' => true,
            ]);
            return response()->json([
                'status' => false,
            ]);
        }
        return response()->json([
            'status' => false,
        ]);
    }

    public function changeShowStatus(Request $request)
    {

        if ($id = $request->id)
        {
            $flower = Flower::find($id);

            if (!$flower->canChange())
            {
                return response()->json([
                    'status' => false,
                ]);
            }

            if ($flower)
            {
                $flower->update([
                    'show' => !$flower->show
                ]);

                return response()->json([
                    'status' => true,
                ]);
            }
            return response()->json([
                'status' => false,
            ]);
        }
        return response()->json([
            'status' => false,
        ]);
    }

    private function processImage($image)
    {
        ini_set('memory_limit','256M');
        $name = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)
            ->resize(null, 500, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->insert('img/watermark.png','top-right', 20,20)
            ->save(public_path('images').'/'.$name);

//        setKey("Zt8Tpdw4FvTBz2NVD505HQnzqXY6Fjyc");
//        fromFile(public_path('images').'/'.$name)->toFile(public_path('images').'/'.$name);
//            $image->move(public_path('images'), $name);
        return $name;
    }
}
