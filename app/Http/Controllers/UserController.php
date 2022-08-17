<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register_view()
    {
        return view('pages/register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $user = new User();
        $user->first_name =  $request->first_name;
        $user->last_name =  $request->last_name;
        $user->email =  $request->email;
        $user->mobile =  $request->mobile;
        $user->password =  $request->password;
        $user->role =  $request->role;
        $user->save();
        return back()->with('msg','User Created Successfully');

    }

    public function login_view()
    {
        return view('login');
    }
    public function login()
    {

    }
}
