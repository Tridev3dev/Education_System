<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user=User::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'role'=>'required',
        ]);
        if($validator->passes())
        {
            $user=new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->password=$request->password;
            $user->role=$request->role;
            $user->Save();
            if($user)
            {
                return response()->json(" DATA  ARE REGISTERED SUCCESSFULLY");
            }
        }
        else
        {
            return response()->json('KINDLY FEEL THE DETAILS BELOW');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $data=User::where('role','!=','admin')->get();
        return view('users')->with('collection',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $user=User::find($request->id);
        if($user->status == 'active'){
            $user->status='inactive';
        }else{
            $user->status='active';
        }
        $user->save();
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
    public function login(Requset $request)
    {
        //
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $data=User::where('email','password')->first();
        if ($data->status=='active')
        {
            return response()->json('YOU HAVE LOGGED IN SUCCESSFULLY');
        }
        else
        {
            return response()->json('YOU ARE NOT ACTIVE USER TO LOGGED IN');
        }
    }
    public function customSignup(Request $request)
    {
        $user = $request->all();
        $check = $this->createUser($user);
        return redirect("register")->withSuccess('Successfully logged-in!');
    }
    public function createSignin(Request $request)
    {
        $Credentials=$request->only('email','password');
        {
             return redirect()->intended('userhome')->withSuccess('logged-in');
        }
        return redirect("login")->withSuccess('credentials are wrong');         
    }
    public function createUser(array $request)
    {
        return User::create([
            'name'=> $request['name'],
            'email'=> ['email'],
            'phone'=>['phone'],
            'password'=> Hash::make($request['password']),
            'role'=>['role'],
        ]);
    }
}
