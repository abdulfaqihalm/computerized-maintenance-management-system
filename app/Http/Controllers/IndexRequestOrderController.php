<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\RequestsOrder; 

class IndexRequestOrderController extends Controller 
{
    /**
     * Authenticating this controller 
     */
    public function __construct() {
        $this->middleware('role:Admin|Site|Engineer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requestOrders = RequestsOrder::all();
        return view('requests.index', ['requestOrders'=>$requestOrders]);
    }

}




