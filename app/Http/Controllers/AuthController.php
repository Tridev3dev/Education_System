<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use Auth;
use Hash;
use Session;

class AuthController extends Controller
{
    //
    public function customSignup(Request $request)
    {
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("login")->withSuccess('Successfully logged-in!');
    }
    public function createUser(array $data)
    {
        return User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password']),
            'mobile'=>$data['mobile'],
            'position'=>$data['position'],
            'remark'=>$data['remark']
        ]);
    }

    public function createSignin(Request $request)
    {
        $Credentials=$request->only('email','password');
        if(Auth::attempt($Credentials))
        {
            $name= Auth::User()->name;
            $role= Auth::User()->position;
            session::put('name',$name);
            if ($role=='faculty') {
                return redirect()->intended('faculty')->withSuccess('logged-in');
            }
            if ($role=="student") {
                return redirect()->intended('student')->withSuccess('logged-in');
            }
        }
        return redirect("login")->withSuccess('credentials are wrong');
    }
}