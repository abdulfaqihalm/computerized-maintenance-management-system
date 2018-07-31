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
                            <tr>
                                <th scope="row">1</th>
                                <td>RSUD Kota Bogor</td>
                                <td>Jalan Cisitu Lama 33/160B Dago Bandung RT01 RW12</td>
                                <td>GE Innova 1000</td>
                                <td>EB18315032</td>
                                <td>Q1W2E3R445T6YI89O00</td>
                                <td>IGS320PQWE4R5TYOKM8989JDU8</td>
                                <td>August 2025</td>
                                <td>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-danger btn-sm mt-1">Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>RSUD Kota Bogor</td>
                                <td>Jalan Cisitu Lama 33/160B Dago Bandung RT01 RW12</td>
                                <td>GE IGS 320</td>
                                <td>EB18315032</td>
                                <td>Q1W2E3R445T6YI89O00</td>
                                <td>IGS320PQWE4R5TYOKM8989JDU8</td>
                                <td>August 2025</td>
                                <td>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-danger btn-sm mt-1">Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>RSUD Kota Bogor</td>
                                <td>Jalan Cisitu Lama 33/160B Dago Bandung RT01 RW12</td>
                                <td>GE IGS 320</td>
                                <td>EB18315032</td>
                                <td>Q1W2E3R445T6YI89O00</td>
                                <td>IGS320PQWE4R5TYOKM8989JDU8</td>
                                <td>August 2025</td>
                                <td>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-danger btn-sm mt-1">Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>RSUD Kota Bogor</td>
                                <td>Jalan Cisitu Lama 33/160B Dago Bandung RT01 RW12</td>
                                <td>GE IGS 320</td>
                                <td>EB18315032</td>
                                <td>Q1W2E3R445T6YI89O00</td>
                                <td>IGS320PQWE4R5TYOKM8989JDU8</td>
                                <td>August 2025</td>
                                <td>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-danger btn-sm mt-1">Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>RSUD Kota Bogor</td>
                                <td>Jalan Cisitu Lama 33/160B Dago Bandung RT01 RW12</td>
                                <td>GE IGS 320</td>
                                <td>EB18315032</td>
                                <td>Q1W2E3R445T6YI89O00</td>
                                <td>IGS320PQWE4R5TYOKM8989JDU8</td>
                                <td>August 2025</td>
                                <td>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <a href="" style="text-decoration: none"><button class="btn btn-block btn-outline-danger btn-sm mt-1">Delete</button></a>
                                </td>
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
    <script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#sitesList').DataTable();
        } );
    </script>
@endsection
