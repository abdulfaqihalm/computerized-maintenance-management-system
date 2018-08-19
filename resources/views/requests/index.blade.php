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
                <h3 class="page-title card-header">Request List 
                    @if(!(Auth::user()->hasRole('Engineer')))
                    <a href="{{route('request.create')}}"><button class="btn btn-outline-info float-right">Create New Request</button></a>
                    @endif
                </h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="requestsList">
                            <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">Status</th>
                                <th scope="col">Time</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLongTitle">Request Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
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
    </script>
@endsection
