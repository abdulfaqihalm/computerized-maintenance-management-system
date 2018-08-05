@extends('layouts.app')

@section('title','| Edit Site')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8 ">
            <div class="card">
                <h3 class="page-title card-header">Add New Site</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="hospital">Hospital</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="hospital" placeholder="Insert hospital..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="address">Address</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="address" placeholder="Insert address..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="model">Model</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="model" placeholder="Insert model..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="site-id">Site ID</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="site-id" placeholder="Insert Site-ID..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="manufacture-id">Manufacture System ID</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="manufacture-id" placeholder="Insert manufacture system ID..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="sn">Equipment Serial Number</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="sn" placeholder="Insert Equipment SN..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="warranty">Warranty Status</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="warranty" placeholder="Insert warrant status..." required>
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
