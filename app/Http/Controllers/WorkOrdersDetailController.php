<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkOrdersDetail;
use App\RequestsOrder; 
use App\User;
use App\Hospital; 

class WorkOrdersDetailController extends Controller
{
    /**
     * Authenticating this controller 
     */
    public function __construct() {
        $this->middleware('role:Admin|Engineer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workorderdetails = WorkOrdersDetail::all();
        return view('workorders.index', ['workorderdetails'=>$workorderdetails]);
    }

    /**
     * Show the form for creating a new resource by RequestOrder.
     *
     * @return \Illuminate\Http\Response
     */
    public function createByRequest($requestId)
    {
        $request = RequestsOrder::find($requestId);
        $users = User::withRole('Engineer')->get(); 
        return view('workorders.createByRequest',['request'=>$request,'users'=>$users]);  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = Hospital::all(); 
        $users = User::withRole('Engineer')->get(); 
        return view('workorders.create',['users'=>$users, 'hospitals'=>$hospitals]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeByRequest(Request $request)
    {
        $workOrder = new WorkOrdersDetail; 

        $this->validate($request, [
            'title'=>'required|max:255',
            'description' => 'required|max:65535',
            'equipment_status' => 'required|max:255',
            'site_id' => 'required|max:255',
            'issue_detected_at' => 'required|max:255',
            'cp_name' => 'required|max:255',
            'request_id' => 'required|integer',
        ]);

        $workOrder->title = $request->input('title');
        $workOrder->description = $request->input('description');
        $workOrder->equipment_status = $request->input('equipment_status');
        $workOrder->site_id = $request->input('site_id');
        $workOrder->issue_detected_at = $request->input('issue_detected_at');
        $workOrder->cp_name = $request->input('cp_name');
        
        RequestsOrder::destroy($request->input('request_id'));

        $workOrder->save();

        return redirect()->route('work-order-detail.index');

    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workOrder = new WorkOrdersDetail; 

        $this->validate($request, [
            'title'=>'required|max:255',
            'description' => 'required|max:65535',
            'equipment_status' => 'required|max:255',
            'site_id' => 'required|max:255',
            'issue_detected_at' => 'required|max:255',
            'cp_name' => 'required|max:255',
        ]);

        $workOrder->title = $request->input('title');
        $workOrder->description = $request->input('description');
        $workOrder->equipment_status = $request->input('equipment_status');
        $workOrder->site_id = $request->input('site_id');
        $workOrder->issue_detected_at = $request->input('issue_detected_at');
        $workOrder->cp_name = $request->input('cp_name');

        $workOrder->save();

        return redirect()->route('work-order-detail.index');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
