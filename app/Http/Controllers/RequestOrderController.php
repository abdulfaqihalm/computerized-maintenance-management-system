<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestsOrder; 


class RequestOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requestOrders = RequestsOrder::orderBy('created_at', 'desc');
        return view('requests.index', ['requestOrders'=>$requestOrders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestOrder = new RequestOrder;

        $this->validate($request, [
            'title'=>'required|max:255',
            'description' => 'required|max:65535',
            'equipment_status' => 'required|max:255',
            'hospital' => 'required|max:255',
            'cp_name' => 'required|max:255',
            'cp_number' => 'required|min:10|max:14'
        ]);

        $requestOrder->title = $request->input('title');
        $requestOrder->description = $request->input('description');
        $requestOrder->equipment_status = $request->input('equipment_status');
        $requestOrder->hospital = $request->input('hospital');
        $requestOrder->cp_name = $request->input('cp_name');
        $requestOrder->cp_number = $request->input('cp_number');

        $requestOrder->save(); 

        session()->flash('create', 'New request order');

        return redirect()->route('request.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //WITH AJAXXX??????????????
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requestOrder = RequestsOrder::find($id);

        $requestOrder->delete(); 

        session()->flash('delete', 'Request order');

        return redirect()->route('request.index');
    }
}
