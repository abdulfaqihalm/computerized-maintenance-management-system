@extends('layouts.app')

@section('title','| Create Role')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8 ">
            <div class="card">
                <h3 class="page-title card-header">Add New Role</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('role.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="name">Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Insert name..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="display_name">Display Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="display_name" name="display_name" placeholder="Insert display name..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="description">Description</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="description" name="description" placeholder="Insert description..." required>
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
