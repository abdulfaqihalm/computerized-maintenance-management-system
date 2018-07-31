@extends('layouts.app')

@section('title','| Requests Index')

@section('stylesheets')
    <!-- For addition styelsheets -->
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row justify-content-center main-content">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Request List <a href="{{route('request.create')}}"><button class="btn btn-outline-info float-right">Create New Request</button></a></h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="requestsList">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">Status</th>
                                <th scope="col">Time</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Broken X-Ray tube</td>
                                <td>RSUD Kota Bogor</td>
                                <td>Down</td>
                                <td>Timestamp</td>
                                <td>
                                    <button class="btn btn-block btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Details</button>
                                    <button class="btn btn-block btn-outline-danger btn-sm">Create Work Order</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Meja patah</td>
                                <td>RSUD Kota Bogor</td>
                                <td>Down</td>
                                <td>Timestamp</td>
                                <td>
                                    <button class="btn btn-block btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Details</button>
                                    <button class="btn btn-block btn-outline-danger btn-sm">Create Work Order</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Broken X-Ray tube</td>
                                <td>RSAU Halim Antariksa</td>
                                <td>Down</td>
                                <td>Timestamp</td>
                                <td>
                                    <button class="btn btn-block btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Details</button>
                                    <button class="btn btn-block btn-outline-danger btn-sm">Create Work Order</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Broken X-Ray tube</td>
                                <td>RSUD Kota Bogor</td>
                                <td>Down</td>
                                <td>Timestamp</td>
                                <td>
                                    <button class="btn btn-block btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Details</button>
                                    <button class="btn btn-block btn-outline-danger btn-sm">Create Work Order</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Broken X-Ray tube</td>
                                <td>RSUD Kota Bogor</td>
                                <td>Down</td>
                                <td>Timestamp</td>
                                <td>
                                    <button class="btn btn-block btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Details</button>
                                    <button class="btn btn-block btn-outline-danger btn-sm">Create Work Order</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Broken X-Ray tube</td>
                                <td>RSUD Kota Bogor</td>
                                <td>Down</td>
                                <td>Timestamp</td>
                                <td>
                                    <button class="btn btn-block btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Details</button>
                                    <button class="btn btn-block btn-outline-danger btn-sm">Create Work Order</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Broken X-Ray tube</td>
                                <td>RSUD Kota Bogor</td>
                                <td>Down</td>
                                <td>Timestamp</td>
                                <td>
                                    <button class="btn btn-block btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Details</button>
                                    <button class="btn btn-block btn-outline-danger btn-sm">Create Work Order</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLongTitle">Request Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Title</h5>
                                <h5>Description</h5>
                                <h5>Hospital</h5>
                                <h5>Equipment Status</h5>
                                <h5>Issue Detected</h5>
                                <h5>Request Sent</h5>
                                <h5>Contact Person</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
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
            $('#requestsList').DataTable();
        } );

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
@endsection
