<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeInfoRequest;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $viewdata = [
            'user' => Auth::user()
        ];
        return view('auth.account')->with($viewdata);
    }

    public function changeInfo(ChangeInfoRequest $request)
    {
        $data = $request->only([
            'name',
        ]);

        Auth::user()->update($data);
        Auth::user()->save();

        return redirect()->back();
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $data = $request->only([
            'password',
        ]);

        Auth::user()->update($data);
        Auth::user()->save();

        return redirect()->back();
    }
}
