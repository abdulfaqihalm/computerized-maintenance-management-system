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
<<<<<<< HEAD
                    <form class="form-horizontal" action="{{route('request.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="title">Title</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Add title.." required>
=======
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="title">Title</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="title" placeholder="Singkat dan jelas!" required>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="description">Description</label>
                            <div class="col-lg-8">
<<<<<<< HEAD
                                <textarea type="text" class="form-control" id="description" name="description" placeholder="Add description" required></textarea>
=======
                                <textarea type="text" class="form-control" id="description" placeholder="Jelaskan lebih rinci . . ." required></textarea>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right">Equipment Status</label>
                            <div class="col-lg-8">
                                <div class="custom-radio">
<<<<<<< HEAD
                                    <label class="radio-inline"><input type="radio" name="equipment_status" value="Partial" checked="checked"> Partial</label>
                                </div>
                                <div class="custom-radio">
                                    <label class="radio-inline"><input type="radio" name="equipment_status" value="Down"> Down</label>
=======
                                    <label class="radio-inline"><input type="radio" name="optradio" checked="checked"> Partial</label>
                                </div>
                                <div class="custom-radio">
                                    <label class="radio-inline"><input type="radio" name="optradio"> Down</label>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="hospital">Hospital</label>
                            <div class="col-lg-8">
<<<<<<< HEAD
                                <select class="form-control hospital" id="hospital" name="hospital_id">
                                    <option value="0" disabled="true" selected="true">Choose Hospital</option>
                                    @foreach($hospitals as $hospital)
                                        <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                    @endforeach
=======
                                <select class="form-control" id="hospital">
                                    <option selected disabled>Choose Hospital...</option>
                                    <option value="1">RSUD Bogor</option>
                                    <option value="2">RSAU Halim</option>
                                    <option value="3">RS Cibinong</option>
                                    <option value="4">RS Cirebon</option>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
<<<<<<< HEAD
                                <label class="col-form-label col-lg-3 text-md-right" for="modality">Modality</label>
                                <div class="col-lg-8">
                                    <select class="form-control modality" id="modality" name="modality">
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
=======
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                            <span class="col-form-label col-lg-3 text-md-right">Issue Detected</span>
                            <div class="col-md-8">
                                <div class="row" id="service-day">
                                    <div class='col'>
                                        <div class="card card-label">
                                            <label class="control-label card-header text-center" for="time">Time</label>
<<<<<<< HEAD
                                            <input type='time' class="form-control" id="time" name="time_detected_at"/>
=======
                                            <input type='time' class="form-control" id="time"/>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="card card-label">
                                            <label class="control-label card-header text-center" for="date">Date</label>
<<<<<<< HEAD
                                            <input type='date' class="form-control align-content-center" id="date" name="date_detected_at"/>
=======
                                            <input type='date' class="form-control align-content-center" id="date"/>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
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
<<<<<<< HEAD
                                            <input type="text" class="form-control" id="name" name="cp_name" placeholder="Add your name" required>
=======
                                            <input type="text" class="form-control" id="name" placeholder="Nama Jelas" required>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
                                        </div>
                                    </div>
                                    <div class='col-md-5'>
                                        <div class="card card-label">
                                            <label class="control-label card-header text-center" for="phone">Phone</label>
<<<<<<< HEAD
                                            <input type="text" class="form-control" id="phone" name="cp_number" placeholder="Your phone number" required>
=======
                                            <input type="text" class="form-control" id="phone" placeholder="Nomor Handphone" required>
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
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
<<<<<<< HEAD
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>     
        //equal to ( document ).ready() 
        $(function(){
            $("select[name='hospital_id']").change(function(){
            var hospital_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-ajax') ?>",
                method: 'POST',
                data: {hospital_id:hospital_id, _token:token},
                success: function(data) {
                    $("select[name='modality'").html('');
                    $("select[name='modality'").html(data.options);
                }
                });  
            });
        });
    </script>
=======
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
@endsection
