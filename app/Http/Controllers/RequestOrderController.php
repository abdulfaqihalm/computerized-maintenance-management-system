<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestsOrder;
use App\Hospital; 
use App\Modality; 

class RequestOrderController extends Controller
{
    /**
     * Authenticating this controller 
     */
    public function __construct() {
        $this->middleware('role:Admin|Site');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $hospitals = Hospital::all();
        return view('requests.create', ['hospitals'=>$hospitals]);
    }

    /**
     * Ajax for selecting modality as selected hospital
     *
     * @param  app\Modality  $request
     * @return json
     */
    public function selectAjax(Request $request) {
        if($request->ajax()){
    		$modalities = Modality::where('hospital_id',$request->hospital_id)->pluck("model","siteId")->all();
    		$data = view('requests.ajax-select',compact('modalities'))->render();
    		return response()->json(['options'=>$data]);
    	}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestOrder = new RequestsOrder;

        $this->validate($request, [
            'title'=>'required|max:255',
            'description' => 'required|max:65535',
            'equipment_status' => 'required|max:255',
            'hospital_id' => 'required|integer',
            'modality' => 'required|max:255',
            'time_detected_at' => 'required',
            'date_detected_at' => 'required',
            'cp_name' => 'max:255',
            'cp_number' => 'min:10|max:14'
        ]);

        $requestOrder->title = $request->input('title');
        $requestOrder->description = $request->input('description');
        $requestOrder->equipment_status = $request->input('equipment_status');
        $requestOrder->hospital_id = $request->input('hospital_id');
        $requestOrder->modality = $request->input('modality');
        $requestOrder->time_detected_at = date('H:i:s', strtotime($request->input('time_detected_at')));
        $requestOrder->date_detected_at = date('Y-m-d', strtotime($request->input('date_detected_at')));

        $requestOrder->cp_name = $request->input('cp_name');
        $requestOrder->cp_number = $request->input('cp_number');

        $requestOrder->save(); 

        return redirect()->route('request.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if($request->ajax()){
            $request = RequestsOrder::where('id',$request->id)->all();
            $data = view('requests.ajax-modal', compact('request'))->render();
            return response()->json(['details'=>$data]); 
    	}
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
        return redirect()->route('request.index');
    }
}
