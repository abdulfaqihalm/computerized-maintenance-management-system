<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part; 

class PartController extends Controller
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
        $parts = Part::all(); 
        return view('parts.index', ['parts'=>$parts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parts.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $part = new Part;

        $this->validate($request, [
            'part_number'=> 'required|max:255|unique:parts',
            'modality' =>'required|max:255',
            'category'=>'required|max:255',
            'description'=>'required|max:255',
            'quantity'=>'required|integer',
            'cost'=>'required|integer',
        ]);

        $part->part_number = $request->input('part_number');
        $part->modality = $request->input('modality');
        $part->category = $request->input('category');
        $part->description = $request->input('description');
        $part->quantity = $request->input('quantity');
        $part->cost = $request->input('cost');

        $part->save(); 

        return redirect()->route('part.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $part = Part::find($id);
        return view('parts.edit', ['part'=>$part]);
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
        $part = Part::find($id);
        if($request->part_number==$part->part_number)
        {
            $this->validate($request, [
                'part_number'=> 'required|max:255',
            ]);
        } else 
        {
            $this->validate($request, [
                'part_number'=> 'required|max:255|unique:parts',
            ]);
        }
        $this->validate($request, [
            'modality' =>'required|max:255',
            'category'=>'required|max:255',
            'description'=>'required|max:255',
            'quantity'=>'required|integer',
            'cost'=>'required|integer',
        ]);

        $part->part_number = $request->input('part_number');
        $part->modality = $request->input('modality');
        $part->category = $request->input('category');
        $part->description = $request->input('description');
        $part->quantity = $request->input('quantity');
        $part->cost = $request->input('cost');

        $part->save(); 

        return redirect()->route('part.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $part = Part::find($id);
        $part->delete(); 

        return redirect()->route('part.index');
    }
}
