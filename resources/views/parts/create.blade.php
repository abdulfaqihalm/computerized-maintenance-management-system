@extends('layouts.app')

@section('title','| Create Part')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Add New Part</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="part-number">Part Number:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="part-number" placeholder="Insert part number..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="modality">Modality:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="modality" placeholder="Insert modality..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="category">Category:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="category" placeholder="Insert category..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="name">Description/Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Insert description/name..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="quantity">Quantity:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="quantity" placeholder="Insert quantity..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3" for="cost">Cost:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="cost" placeholder="Insert cost..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
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
