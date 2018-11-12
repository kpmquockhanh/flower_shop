<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
//        $categories = Admin::where('id', '!=', Auth::guard('admin')->id());
        $categories = Category::query();
        if ($search = $request->search)
        {
            $categories->orWhere('name','like', '%'.$search.'%')
                ->orWhere('email','like', '%'.$search.'%');
        }

        if ($sort = $request->sort)
        {
            $categories->orderBy($sort, 'desc');
        }

        $page = 8;
        if ($paginate = $request->paginate)
            $page = $paginate;

        $viewData = [
            'categories' => $categories->paginate($page),
            'queries' => $request->query(),
        ];
        return view('backend.categories.list')->with($viewData);
    }

    public function create()
    {
        return view('backend.categories.add');
    }

    public function store(Request $request)
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


        saler::insert(array_merge($data, [
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]));

        return redirect(route('admin.salers.list'));
    }

    public function edit($id)
    {
        if ($id)
        {
            $categorie = Admin::findOrFail($id);
            if ($categorie)
                return view('backend.salers.edit', compact('saler'));
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function update(Request $request)
    {
        if ($id = $request->id)
        {
            $categorie = Admin::find($id);
            if ($categorie)
            {
                $data = $request->only([
                    'name',
                    'location',
                    'status',
                    'type',
                ]);

                if (isset($data['type']))
                    if ($data['type'] == 3)
                        if (Auth::guard('admin')->user()->type !=3)
                            $data['type'] = $categorie->type;

                if ($image = $request->image)
                {
                    $name = time().'.'.$image->getClientOriginalExtension();;
                    $image->move(public_path('images/avatars'), $name);
                    $data['image'] = $name;
                }

                $categorie->update(array_merge($data, [
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
            $admin = Admin::findOrFail($id);

            if (Admin::destroy($id))
            {
                Flower::where('admin_id', $id)->delete();
                return response()->json([
                    'status' => true,
                ]);
            }
        }
        return response()->json([
            'status' => false,
        ]);
    }

    public function changeStatus(Request $request)
    {
        if ($id = $request->id)
        {
            $categorie = Admin::find($id);
            if ($categorie)
            {
                $categorie->update([
                    'status' => !$categorie->status
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
