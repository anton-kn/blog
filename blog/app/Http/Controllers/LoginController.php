<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255'
        ]);

        if( auth()->attempt($request->only('email', 'password')) ){
            return redirect('/admin/dashboard');
        }else{
            return back()->with('status', 'Invalid login details');
        }



    }
}
