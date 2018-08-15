<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User; 
use App\ROle;

class UserController extends Controller
{
    /**
     * Authenticating this controller 
     */
    public function __construct() {
        $this->middleware('role:Admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); 
        return view('users.index', ['users'=>$users]); 
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('users.edit', ['user'=>$user, 'roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($request->email == $user->email)
        {
            $this->validate($request,[
                'email' => 'required|string|email|max:255',
            ]);
        } else 
        {
            $this->validate($request,[
                'email' => 'required|string|email|max:255|unique:users',
            ]);
        }
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        
        $user->save();
        $user->roles()->sync($request->role);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->roles()->sync([]); 
        $user->delete();

        return redirect()->route('user.index'); 
    }
}
