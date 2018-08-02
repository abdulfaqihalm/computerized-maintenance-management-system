@extends('layouts.app')

@section('title','| Users Index')

@section('stylesheets')
    <!-- For addition styelsheets -->
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Users Lists</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered" id="usersList">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Name</th>
                                <th scope="col">User Role</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>johndoe@email.com</td>
                                <td>P@ssw0rd</td>
                                <td>Admin</td>
                                <td>John Doe</td>
                                <td>
                                    <a href="#" style="text-decoration: none"><button class="btn btn-block btn-outline-info btn-sm">Edit</button></a>
                                    <a href="#" style="text-decoration: none"><button class="btn btn-block btn-outline-danger btn-sm mt-1">Delete</button></a>
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
            $('#usersList').DataTable();
        } );
    </script>
@endsection
