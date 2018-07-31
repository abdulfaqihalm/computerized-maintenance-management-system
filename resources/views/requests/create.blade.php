@extends('layouts.app')

@section('title','| Create Request')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Add New Request</h3>
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
                            <label class="col-form-label col-lg-3 text-md-right">Equipment Status</label>
                            <div class="col-lg-8">
                                <div class="custom-radio">
                                    <label class="radio-inline"><input type="radio" name="optradio" checked="checked"> Partial</label>
                                </div>
                                <div class="custom-radio">
                                    <label class="radio-inline"><input type="radio" name="optradio"> Down</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="hospital">Hospital</label>
                            <div class="col-lg-8">
                                <select class="form-control" id="hospital">
                                    <option selected disabled>Choose Hospital...</option>
                                    <option value="1">RSUD Bogor</option>
                                    <option value="2">RSAU Halim</option>
                                    <option value="3">RS Cibinong</option>
                                    <option value="4">RS Cirebon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-form-label col-lg-3 text-md-right">Issue Detected</span>
                            <div class="col-md-8">
                                <div class="row" id="service-day">
                                    <div class='col'>
                                        <div class="card card-label">
                                            <label class="control-label card-header text-center" for="time">Time</label>
                                            <input type='time' class="form-control" id="time"/>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="card card-label">
                                            <label class="control-label card-header text-center" for="date">Date</label>
                                            <input type='date' class="form-control align-content-center" id="date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-form-label col-lg-3 text-md-right">Contact Person</span>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class='col-md-7'>
                                        <div class="card card-label">
                                            <label class="control-label card-header text-center" for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Nama Jelas" required>
                                        </div>
                                    </div>
                                    <div class='col-md-5'>
                                        <div class="card card-label">
                                            <label class="control-label card-header text-center" for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" placeholder="Nomor Handphone" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0 mt-4 justify-content-center">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Scripts for this page -->
@endsection
