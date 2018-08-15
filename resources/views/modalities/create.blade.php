@extends('layouts.app')

@section('title','| Create Modality')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8 ">
            <div class="card">
                <h3 class="page-title card-header">Add New Modality</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('modality.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="hospital">Hospital</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="hospital_id">
                                    @foreach($hospitals as $hospital)
                                        <option value ='{{$hospital->id}}'>{{$hospital->name}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="model">Model</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="model" name="model" placeholder="Insert model..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="site-id">Site ID</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="site-id" name="siteId" placeholder="Insert Site-ID..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="manufacture-id">Manufacture System ID</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="manufacture-id" name="manufacture_system" placeholder="Insert manufacture system ID..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="sn">Equipment Serial Number</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="sn" name="equipment_serial_number" placeholder="Insert Equipment SN..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="warranty">Warranty Status</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="warranty" name="warranty_status" placeholder="Insert warrant status..." required>
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4 justify-content-center">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Scripts for this page -->
@endsection
