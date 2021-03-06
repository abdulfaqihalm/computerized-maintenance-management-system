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
                <h3 class="page-title card-header">Add New Work Order</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('work-order-detail.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="title">Title</label>
                            <div class="col-lg-8">
                                <input  type="text" class="form-control" id="title" name="title" placeholder="Insert title.." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="description">Description</label>
                            <div class="col-lg-8">
                                <textarea  type="text" class="form-control" id="description" name="description" placeholder="Insert description.." required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-lg-right">Equipment Status</label>
                            <div class="col-lg-8">
                                <div class="custom-radio">
                                    <label  class="radio-inline"><input type="radio" name="equipment_status" value="Partial"> Partial</label>
                                </div>
                                <div class="custom-radio">
                                    <label  class="radio-inline"><input type="radio" name="equipment_status" value="Down"> Down</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="hospital">Hospital</label>
                            <div class="col-lg-8">
                                <select class="form-control hospital" id="hospital">
                                    <option value="0" disabled="true" selected="true">Choose Hospital</option>
                                    @foreach($hospitals as $hospital)
                                        <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-form-label col-lg-3 text-md-right" for="modality">Modality</label>
                                <div class="col-lg-8">
                                    <select class="form-control modality" id="modality" name="site_id">
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-form-label text-md-right col-lg-3" for="site">Issue Detected (MM/DD/YY)</label>
                                <div class="col-lg-8">
                                        <input  type='date' class="form-control align-content-center" id="date" name="issue_detected_at"/>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-md-right col-lg-3" for="engineer">Technical Engineer</label>
                            <div class="col-lg-8">
                                    <select class="form-control hospital" id="engineer" name="cp_name">
                                        <option value="0" disabled="true" selected="true">Choose Engineer</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->name}}">{{$user->name}}</option>
                                        @endforeach
                                    </select> 
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
    </section>
@endsection

@section('scripts')
    <!-- Scripts for this page -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>     
        //equal to ( document ).ready() 
        $(function(){
            $("select[id='hospital']").change(function(){
            var hospital_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-ajax') ?>",
                method: 'POST',
                data: {hospital_id:hospital_id, _token:token},
                success: function(data) {
                    $("select[name='site_id'").html('');
                    $("select[name='site_id'").html(data.options);
                }
                });  
            });
        });
    </script>
@endsection
