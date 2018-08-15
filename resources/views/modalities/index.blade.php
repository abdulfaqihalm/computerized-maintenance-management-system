@extends('layouts.app')

@section('title','| Modalities Index')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row justify-content-center main-content">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Modality List <a href="{{route('modality.create')}}"><button class="btn btn-outline-info float-right">Add New Modality</button></a></h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped" id="modalityList">
                            <thead>
                            <tr>
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
                            @foreach($modalities as $modality)
                            <tr>
                                <td>{{$modality->hospital->name}}</td>
                                <td>{{$modality->hospital->address}}</td>
                                <td>{{$modality->model}}</td>
                                <td>{{$modality->siteId}}</td>
                                <td>{{$modality->manufacture_system}}</td>
                                <td>{{$modality->equipment_serial_number}}</td>
                                <td>{{$modality->warranty_status}}</td>
                                <td>
                                    <a href="{{route('modality.edit', $modality->siteId)}}" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <form method="POST" action="{{route('modality.destroy', $modality->siteId)}}">
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
            $('#modalityList').DataTable();
        } );
    </script>
@endsection
