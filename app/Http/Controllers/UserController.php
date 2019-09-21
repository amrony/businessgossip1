<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.add-user');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required',
            'password' => 'required|min:8',
            'status' => 'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = $request->status;
        $user->save();

        return redirect('/user/index')->with('message', 'Insert Successfully');
    }

    public function show(){
        $users = User::all();
        return view('admin.user.view-user', compact('users'));
    }
}
