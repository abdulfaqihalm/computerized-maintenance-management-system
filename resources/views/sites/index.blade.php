@extends('layouts.app')

@section('title','| Sites Index')

@section('stylesheets')
    <!-- For addition styelsheets -->
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
    <script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
@endsection 

@section('content')
    <!-- Contents of this page -->
    <section class="row sites-list">
            <div class="col-md-11 container shadow-sm">
                <h1 class="page-title justify-content-between">Sites List <button class="btn btn-outline-secondary float-right">Add New Part</button></h1>
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="partsList">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hospital</th>
                            <th scope="col">Address</th>
                            <th scope="col">Model</th>
                            <th scope="col">Site ID</th>
                            <th scope="col">Manufacture System</th>
                            <th scope="col">Serial Number</th>
                            <th scope="col">Warranty</th>
                            <th scope="col">Last Update</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($sites as $site)
                            <tr>
                            <th scope="row">{{$site->id}}</th>
                            <th scope="row">{{$site->hospital}}</th>
                            <th scope="row">{{$site->address}}</th>
                            <th scope="row">{{$site->model}}</th>
                            <th scope="row">{{$site->siteId}}</th>
                            <th scope="row">{{$site->manufacture_system}}</th>
                            <th scope="row">{{$site->equipment_serial_number}}</th>
                            <th scope="row">{{$site->warranty_status}}</th>
                            <th scope="row">{{$site->hospital}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
@endsection

@section('scripts')
    <!-- Scripts for this page -->
    <script>
        $(document).ready( function () {
            $('#partsList').DataTable();
        } );
    </script>
@endsection