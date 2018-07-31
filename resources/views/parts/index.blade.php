@extends('layouts.app')

@section('title','| Parts Index')

@section('stylesheets')
    <!-- For addition styelsheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('datatable/datatables.css')}}"/>
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-between">
        <div class="col-md-11">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Parts List<a href="{{route('part.create')}}"><button class="btn btn-outline-info float-right">Add New Part</button></a></h3>
                <div class="card-body">
                    <div class="table-responsive">
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
    <script src="{{asset('datatable/datatables.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#partsList').DataTable();
        } );
    </script>
@endsection
