<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital; 

class HospitalController extends Controller
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
        $hospitals = Hospital::all(); 
        return view('hospitals.index', ['hospitals'=>$hospitals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospitals.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hospital = new Hospital;

        $this->validate($request, [
            'name'=> 'required|max:255|unique:hospitals',
            'address' =>'required|max:255|unique:hospitals',
        ]);

        $hospital->name = $request->input('name');
        $hospital->address = $request->input('address');

        $hospital->save(); 

        return redirect()->route('hospital.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Hospital::find($id);
        return view('hospitals.edit', ['hospital'=>$hospital]);
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
        $hospital = Hospital::find($id);

        if( ($request->name==$hospital->name) && ($request->address==$hospital->address) )
        {
            $this->validate($request, [
                'name'=> 'required|max:255',
                'address' =>'required|max:255',
            ]);
        } elseif($request->name==$hospital->name) 
        {
            $this->validate($request, [
                'name'=> 'required|max:255',
                'address' =>'required|max:255|unique:hospitals',
            ]);
        } elseif($request->address==$hospital->address)
        {
            $this->validate($request, [
                'name'=> 'required|max:255|unique:hospitals',
                'address' =>'required|max:255',
            ]);
        }
        
        $hospital->name = $request->input('name');
        $hospital->address = $request->input('address');

        $hospital->save(); 

        return redirect()->route('hospital.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = Hospital::find($id);
        $hospital->delete(); 

        return redirect()->route('hospital.index');
    }
}

