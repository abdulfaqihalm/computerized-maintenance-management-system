@extends('layouts.app')

@section('title','| Sites Index')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row justify-content-center main-content">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Sites List <a href="{{route('site.create')}}"><button class="btn btn-outline-info float-right">Add New Site</button></a></h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped" id="sitesList">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">Address</th>
                                <th scope="col">Model</th>
                                <th scope="col">Site ID</th>
                                <th scope="col">Manufacture System ID</th>
                                <th scope="col">Equipment Serial Number</th>
                                <th scope="col">Warranty Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sites as $site)
                            <tr>
                                <th scope="row">{{$site->id}}</th>
                                <td>{{$site->hospital}}</td>
                                <td>{{$site->address}}</td>
                                <td>{{$site->model}}</td>
                                <td>{{$site->siteId}}</td>
                                <td>{{$site->manufacture_system}}</td>
                                <td>{{$site->equipment_serial_number}}</td>
                                <td>{{$site->warranty_status}}</td>
                                <td>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <form method="POST" action="{{route('site.destroy', $site->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-danger btn-sm mt-1">Delete</button></a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#sitesList').DataTable();
        } );
    </script>
@endsection
