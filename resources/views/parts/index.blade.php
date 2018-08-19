@extends('layouts.app')

@section('title','| Parts Index')

@section('stylesheets')
    <!-- For addition styelsheets -->
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
=======
    <link rel="stylesheet" type="text/css" href="{{asset('datatable/datatables.css')}}"/>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
@endsection

@section('content')
    <!-- Contents of this page -->
<<<<<<< HEAD
    <section class="row main-content justify-content-center">
=======
    <section class="row main-content justify-content-between">
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
        <div class="col-md-11">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Parts List<a href="{{route('part.create')}}"><button class="btn btn-outline-info float-right">Add New Part</button></a></h3>
                <div class="card-body">
                    <div class="table-responsive">
<<<<<<< HEAD
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
=======
                        <table class="table table-hover table-bordered" id="partsList">
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
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>727662345</td>
                                <td>GE IGS 320 </td>
                                <td>Gantry</td>
                                <td>Front Pivot Inner Cover</td>
                                <td>10</td>
                                <td>1000000</td>
                                <td>16:04 17 Agustus 2018</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>89172349878</td>
                                <td>GE Innova 1000</td>
                                <td>Positioner</td>
                                <td>Front Pivot Inner Cover</td>
                                <td>10</td>
                                <td>1000000</td>
                                <td>16:04 17 Agustus 2018</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>12387754</td>
                                <td>Siemens ADL 200</td>
                                <td>Gantry</td>
                                <td>Front Pivot Inner Cover</td>
                                <td>10</td>
                                <td>1000000</td>
                                <td>16:04 17 Agustus 2018</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>18723987214</td>
                                <td>GE IGS 320</td>
                                <td>Monitors</td>
                                <td>19 Inches LCD HB Color Monitor without Stand</td>
                                <td>10</td>
                                <td>1000000</td>
                                <td>16:04 17 Agustus 2018</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>6125437723</td>
                                <td>GE Innova 1200 </td>
                                <td>Suspensions</td>
                                <td>Cable Track</td>
                                <td>10</td>
                                <td>1000000</td>
                                <td>16:04 17 Agustus 2018</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>123456789</td>
                                <td>GE IGS 300 </td>
                                <td>Gantry</td>
                                <td>Front Pivot Inner Cover</td>
                                <td>10</td>
                                <td>1000000</td>
                                <td>16:04 17 Agustus 2018</td>
                            </tr>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
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
<<<<<<< HEAD
    <script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
=======
    <script src="{{asset('datatable/datatables.js')}}"></script>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
    <script>
        $(document).ready( function () {
            $('#partsList').DataTable();
        } );
    </script>
@endsection
