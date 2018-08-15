@extends('layouts.app')

@section('title','| Create Hospital')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8 ">
            <div class="card">
                <h3 class="page-title card-header">Add New Hospital</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('hospital.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="name">Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Insert hospital name..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="address">Address</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Insert hospital address..." required>
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
