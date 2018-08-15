<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modality; 
use App\Hospital;

class ModalityController extends Controller
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
        $modalities = Modality::all();
        return view('modalities.index',['modalities'=>$modalities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = Hospital::all(); 
        return view('modalities.create', ['hospitals'=>$hospitals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modality = new Modality;

        $this->validate($request, [
            'hospital_id' => 'required|integer',
            'siteId' => 'required|max:255|unique:modalities',
            'model' => 'required|max:255',
            'manufacture_system' => 'required|max:255',
            'equipment_serial_number' => 'required|max:255',
            'warranty_status' => 'required|max:255'
        ]);

        $modality->hospital_id = $request->input('hospital_id');
        $modality->siteId = $request->input('siteId');
        $modality->model = $request->input('model');
        $modality->manufacture_system = $request->input('manufacture_system');
        $modality->equipment_serial_number = $request->input('equipment_serial_number');
        $modality->warranty_status = $request->input('warranty_status'); 

        $modality->save();

        return redirect()->route('modality.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($siteId)
    {
        $modality = Modality::find($siteId);
        $hospitals = Hospital::all();
        return view('modalities.edit', ['modality'=>$modality, 'hospitals'=>$hospitals]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $siteId)
    {
        $modality = Modality::find($siteId);

        if($request->siteId==$modality->siteId) 
        {
            $this->validate($request, [
                'siteId' => 'required|max:255',     
            ]);
        } else 
        {
            $this->validate($request, [
                'siteId' => 'required|max:255|unique:modalities',     
            ]);
        }
        $this->validate($request, [
            'hospital_id' => 'required|integer',
            'model' => 'required|max:255',
            'manufacture_system' => 'required|max:255',
            'equipment_serial_number' => 'required|max:255',
            'warranty_status' => 'required|max:255'
        ]);

        $modality->hospital_id = $request->input('hospital_id');
        $modality->siteId = $request->input('siteId');
        $modality->model = $request->input('model');
        $modality->manufacture_system = $request->input('manufacture_system');
        $modality->equipment_serial_number = $request->input('equipment_serial_number');
        $modality->warranty_status = $request->input('warranty_status'); 

        $modality->save();

        return redirect()->route('modality.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($siteId)
    {
        $modality = Modality::find($siteId);
        $modality->delete();
    
        return redirect()->route('modality.index');
    }
}
