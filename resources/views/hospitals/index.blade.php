@extends('layouts.app')

@section('title','| Hospitals Index')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row justify-content-center main-content">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Hospital List <a href="{{route('hospital.create')}}"><button class="btn btn-outline-info float-right">Add New Hospital</button></a></h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped" id="hospitalList">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hospitals as $hospital)
                            <tr>
                                <td>{{$hospital->name}}</td>
                                <td>{{$hospital->address}}</td>
                                <td>
                                    <a href="{{route('hospital.edit', $hospital->id)}}" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <form method="POST" action="{{route('hospital.destroy', $hospital->id)}}">
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
            $('#hospitalyList').DataTable();
        } );
    </script>
@endsection
