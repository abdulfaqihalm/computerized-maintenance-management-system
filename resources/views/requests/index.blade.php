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
<<<<<<< HEAD
                <h3 class="page-title card-header">Request List 
                    @if(!(Auth::user()->hasRole('Engineer')))
                    <a href="{{route('request.create')}}"><button class="btn btn-outline-info float-right">Create New Request</button></a>
                    @endif
                </h3>
=======
                <h3 class="page-title card-header">Request List <a href="{{route('request.create')}}"><button class="btn btn-outline-info float-right">Create New Request</button></a></h3>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="requestsList">
                            <thead>
                            <tr>
<<<<<<< HEAD
=======
                                <th scope="col">No</th>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                                <th scope="col">Title</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">Status</th>
                                <th scope="col">Time</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
<<<<<<< HEAD
                            @foreach($requestOrders as $requestOrder)
                                <tr>
                                    <td>{{ $requestOrder->title }}</td>
                                    <td>{{ $requestOrder->hospital->name }}</td>
                                    <td>{{ $requestOrder->equipment_status }}</td>
                                    <td>{{ $requestOrder->time_detected_at }}</td>
                                    <td>
                                        <button class="btn btn-block btn-outline-secondary btn-sm" data-toggle="modal" data-target="#requestModal" 
                                            data-title="{{ $requestOrder->title }}"
                                            data-description="{{ $requestOrder->description }}" 
                                            data-hospital="{{ $requestOrder->hospital->name }}" 
                                            data-equipment="{{ $requestOrder->equipment_status }}"
                                            data-detected="{{ $requestOrder->date_detected_at }}"
                                            data-stamp="{{ $requestOrder->created_at }}"
                                            data-cp="{{ $requestOrder->cp_name }}" id="detail">Details</button>
                                        <a href="{{ route('work-order-detail-by-request.create', $requestOrder->id)  }}" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Create Work Order</button></a>
                                    </td>
                                </tr>
                            @endforeach
=======
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
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal -->
<<<<<<< HEAD
                <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
=======
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLongTitle">Request Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
<<<<<<< HEAD
                            <div class="modal-body" id="request-data">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <td scope="row">Title :</td>
                                            <td id="detail-title"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">Description :</td>
                                            <td id="detail-description"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Hospital :</td>
                                            <td id="detail-hospital"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Equipment Status :</td>
                                            <td id="detail-equipment"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Issue Detected :</td>
                                            <td id="detail-detected"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Request Sent :</td>
                                            <td id="detail-stamp"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Contact Person :</td>
                                            <td id="detail-cp"></td>
                                        </tr>
                                    </tbody>
                                </table>
=======
                            <div class="modal-body">
                                <h5>Title</h5>
                                <h5>Description</h5>
                                <h5>Hospital</h5>
                                <h5>Equipment Status</h5>
                                <h5>Issue Detected</h5>
                                <h5>Request Sent</h5>
                                <h5>Contact Person</h5>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
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
<<<<<<< HEAD

            $('#detail').click(function (e) {
                var title = $("#detail").attr("data-title");
                var description = $("#detail").attr("data-description");
                var hospital = $("#detail").attr("data-hospital");
                var equipment = $("#detail").attr("data-equipment");
                var detected = $("#detail").attr("data-detected");
                var stamp = $("#detail").attr("data-stamp");
                var cp = $("#detail").attr("data-cp");
                $("#detail-title").html(title);
                $("#detail-description").text(description);
                $("#detail-hospital").text(hospital);
                $("#detail-equipment").text(equipment);
                $("#detail-detected").text(detected);
                $("#detail-stamp").text(stamp);
                $("#detail-cp").text(cp);
            });
            
        });
=======
        } );

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
    </script>
@endsection
