<?php

namespace App\Http\Controllers;

use App\Admin;
use App\saler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SalerController extends Controller
{
    public function index(Request $request)
    {
        $salers = Admin::where('id', '!=', Auth::guard('admin')->id());
        if ($search = $request->search)
        {
            $salers->orWhere('name','like', '%'.$search.'%')
                ->orWhere('email','like', '%'.$search.'%');
        }

        if ($sort = $request->sort)
        {
            $salers->orderBy($sort, 'desc');
        }

        $page = 8;
        if ($paginate = $request->paginate)
            $page = $paginate;

        $viewData = [
            'salers' => $salers->paginate($page),
            'queries' => $request->query(),
        ];
        return view('backend.salers.list')->with($viewData);
    }

//    public function create()
//    {
//        return view('backend.salers.add');
//    }
//
//    public function store(salerRequest $request)
//    {
//        $data = $request->only([
//            'name',
//            'location',
//            'status',
//            'type',
//        ]);
//
//        if ($image = $request->image)
//        {
//            $name = time().'.'.$image->getClientOriginalExtension();;
//            $image->move(public_path('images/avatars'), $name);
//            $data['image'] = $name;
//        }
//
//
//        saler::insert(array_merge($data, [
//            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
//            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
//        ]));
//
//        return redirect(route('admin.salers.list'));
//    }

    public function edit($id)
    {
        if ($id)
        {
            $saler = Admin::findOrFail($id);

            if ($saler)
                return view('backend.salers.edit', compact('saler'));
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function update(Request $request)
    {
//        dd($request->all());
        if ($id = $request->id)
        {
            $saler = Admin::find($id);
            if ($saler)
            {
                $data = $request->only([
                    'name',
                    'location',
                    'status',
                    'type',
                ]);
                if ($image = $request->image)
                {
                    $name = time().'.'.$image->getClientOriginalExtension();;
                    $image->move(public_path('images/avatars'), $name);
                    $data['image'] = $name;
                }

                $saler->update(array_merge($data, [
                    'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
                ]));
                return redirect(route('admin.salers.list'));
            }
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        if ($id = $request->id)
        {
            if (Admin::destroy($id))
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

    public function changeStatus(Request $request)
    {
        if ($id = $request->id)
        {
            $saler = Admin::find($id);
            if ($saler)
            {
                $saler->update([
                    'status' => !$saler->status
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
