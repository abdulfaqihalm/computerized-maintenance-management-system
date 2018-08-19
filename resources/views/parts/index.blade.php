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
                                <th scope="col">Part Number</th>
                                <th scope="col">Modality</th>
                                <th scope="col">Category</th>
                                <th scope="col">Block</th>
                                <th scope="col">Description</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Last Updated Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($parts as $part)
                                <tr>
                                    <th scope="row">{{$part->part_number}}</th>
                                    <td>{{$part->modality}}</td>
                                    <td>{{$part->category}}</td>
                                    <td>{{$part->block}}</td>
                                    <td>{{$part->description}}</td>
                                    <td>{{$part->cost}}</td>
                                    <td>{{$part->quantity}}</td>
                                    <td>{{date('j-M-Y | H:i ',strtotime($part->updated_at))}}</td>
                                    <td>
                                        <a href="{{route('part.edit', $part->part_number)}}" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                        <form action="{{route('part.destroy', $part->part_number)}}" method="POST">
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
