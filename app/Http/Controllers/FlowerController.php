<?php

namespace App\Http\Controllers;

use App\Flower;
use App\Http\Requests\FlowerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FlowerController extends Controller
{
    public function index(Request $request)
    {
        $flowers = Flower::with('admin');

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

        $page = 8;
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
        return view('backend.flowers.add');
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
            $name = time().'.'.$image->getClientOriginalExtension();;
            $image->move(public_path('images'), $name);
            $data['image'] = $name;
        }


        Flower::insert(array_merge($data, [
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]));

        return redirect(route('admin.flowers.list'));
    }

    public function edit($id)
    {
        if ($id)
        {
            $flower = Flower::find($id);

            if (!$flower->canChange())
            {
                return redirect(route('admin.flowers.list'))->withErrors(['noPermission' => 'Bạn không có quyền thay đổi']);
            }

            if ($flower)
                return view('backend.flowers.edit', compact('flower'));
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function update(FlowerRequest $request)
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
                    $name = time().'.'.$image->getClientOriginalExtension();;
                    $image->move(public_path('images'), $name);
                    $data['image'] = $name;
                }

                $flower->update(array_merge($data, [
                    'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
                ]));
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
            if (!Flower::findOrFail($id)->canChange())
                return response()->json([
                    'status' => false,
                ]);
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
}
