<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role; 

class RoleController extends Controller
{
    /**
     * Authentication this controller 
     */
    public function __construct()
    {
        $this->middleware('role:Admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all(); 
        return view('roles.index', ['roles'=>$roles]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role;

        $this->validate($request, [
            'name' => 'required|max:255|unique:roles',
            'display_name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
         
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');

        $role->save(); 

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->users()->sync([]); 
        $role->delete();

        return redirect()->route('role.index'); 
    }
}
