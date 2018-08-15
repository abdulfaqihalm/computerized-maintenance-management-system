@extends('layouts.app')

@section('title','| Create Work Order')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Add New Work Order
                    <button class="btn btn-outline-info float-right" data-toggle="modal" data-target="#requestModal">View Request</button>
                </h3>
                <div class="card-body">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="title">Title</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="title" placeholder="Singkat dan jelas!" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="description">Description</label>
                            <div class="col-lg-8">
                                <textarea type="text" class="form-control" id="description" placeholder="Jelaskan lebih rinci . . ." required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-lg-right">Equipment Status</label>
                            <div class="col-lg-8">
                                <div class="custom-radio">
                                    <label class="radio-inline"><input type="radio" name="eq-status" value="partial" checked="checked"> Partial</label>
                                </div>
                                <div class="custom-radio">
                                    <label class="radio-inline"><input type="radio" name="eq-status" value="down"> Down</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-md-right col-lg-3" for="site-id">Site ID</label>
                            <div class="col-lg-8">
                                <select class="form-control" id="site-id">
                                    <option selected disabled>Choose Site ID...</option>
                                    <option value="1">CATHLAB-BGR01</option>
                                    <option value="2">CATHLAB-PDG01</option>
                                    <option value="3">CATHLAB-PDG02</option>
                                    <option value="4">CATHLAB-PDG01</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-md-right col-lg-3" for="engineer">Technical Engineer</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="engineer" placeholder="Choose User . . .">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mb-0 mt-4">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-block btn-secondary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="reqModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="reqModal">Request Details</h4>
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
                        <h5>Contact Person</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Scripts for this page -->
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
@endsection
