@extends('layouts.app')

@section('title','| 403 Exception')

@section('content')
    <section class="row main-content justify-content-center">
        <div class="col-lg-8 ">
            <div class="card">
                <h3 class="page-title card-header" style="color: gray;">Access Denied!</h2>
                <div class="card-body text-center pt-0">
                    <h1 class="display-1">403</h1>
                    <hr>
                    <h4>You must login as administrator to access this page!</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
