<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site; 
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::all();
        return view('sites.index',['sites'=>$sites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $site = new Site;

        $this->validate($request, [
            'hospital' => 'required|max:255',
            'address' => 'required|max:255',
            'model' => 'required|max:255',
            'siteId' => 'required|max:255|unique:sites',
            'manufacture_system' => 'required|max:255',
            'equipment_serial_number' => 'required|max:255',
            'warranty_status' => 'required|max:255'
        ]);

        $site->hospital = $request->input('hospital');
        $site->address = $request->input('address');
        $site->model = $request->input('model');
        $site->siteId = $request->input('siteId');
        $site->manufacture_system = $request->input('manufacture_system');
        $site->equipment_serial_number = $request->input('equipment_serial_number');
        $site->warranty_status = $request->input('warranty_status'); 

        $site->save();

        session()->flash('create', 'New site');

        return redirect()->route('site.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $site = Site::find($id);
        return view('sites.edit', ['site'=>$site]); 
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
        $site = Site::find($id);

        $this->validate($request, [
            'hospital' => 'required|max:255',
            'address' => 'required|max:255',
            'model' => 'required|max:255',
            'siteId' => 'required|max:255|unique:sites',
            'manufacture_system' => 'required|max:255',
            'equipment_serial_number' => 'required|max:255',
            'warranty_status' => 'required|max:255'
        ]);

        $site->hospital = $request->input('hospital');
        $site->address = $request->input('address');
        $site->model = $request->input('model');
        $site->siteId = $request->input('siteId');
        $site->manufacture_system = $request->input('manufacture_system');
        $site->equipment_serial_number = $request->input('equipment_serial_number');
        $site->warranty_status = $request->input('warranty_status'); 

        $site->save();

        session()->flash('edit', 'site');

        return redirect()->route('site.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $site = Site::find($id);
        $site->delete();
        
        session()->flash('delete', 'Site');

        return redirect()->route('site.index');
    }
}
