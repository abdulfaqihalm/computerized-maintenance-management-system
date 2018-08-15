@extends('layouts.app')

@section('title','| Parts Index')

@section('stylesheets')
    <!-- For addition styelsheets -->
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-md-11">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Parts List<a href="{{route('part.create')}}"><button class="btn btn-outline-info float-right">Add New Part</button></a></h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped" id="partsList">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Part Number</th>
                                <th scope="col">Modality</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description/Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Last Updated Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($parts as $part)
                                <tr>
                                    <th scope="row">{{$part->id}}</th>
                                    <td>{{$part->part_number}}</td>
                                    <td>{{$part->modality}}</td>
                                    <td>{{$part->category}}</td>
                                    <td>{{$part->description}}</td>
                                    <td>{{$part->quantity}}</td>
                                    <td>{{$part->cost}}</td>
                                    <td>{{date('j-M-Y ',strtotime($part->updated_at))}}</td>
                                    <td>
                                        <a href="{{route('part.edit', $part->id)}}" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                        <form action="{{route('part.destroy', $part->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-block btn-outline-danger btn-sm mt-1">Delete</button>
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
    <!-- Scripts for this page -->
    <script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#partsList').DataTable();
        } );
    </script>
@endsection
