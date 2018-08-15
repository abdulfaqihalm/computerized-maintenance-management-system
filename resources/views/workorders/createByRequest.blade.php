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
                    <form class="form-horizontal" action="{{route('work-order-detail-by-request.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="title">Title</label>
                            <div class="col-lg-8">
                                <input readonly type="text" class="form-control" id="title" name="title" value="{{ $request->title }}" required>
                                <input type="hidden" id="request_id" name="request_id" value="{{ $request->id }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="description">Description</label>
                            <div class="col-lg-8">
                                <textarea readonly type="text" class="form-control" id="description" name="description" required>{{ $request->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-lg-right">Equipment Status</label>
                            <div class="col-lg-8">
                                <div class="custom-radio">
                                    <label readonly class="radio-inline"><input type="radio" name="equipment_status" value="Partial" {{$request->equipment_status=="Partial" ? 'checked' : 'readonly' }}> Partial</label>
                                </div>
                                <div class="custom-radio">
                                    <label readonly class="radio-inline"><input type="radio" name="equipment_status" value="Down" {{$request->equipment_status=="Down" ? 'checked' : 'readonly' }}> Down</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-form-label text-md-right col-lg-3" for="site">Site Id</label>
                                <div class="col-lg-8">
                                    <input readonly type="text" class="form-control" id="site" name="site_id" value="{{ $request->modality }}" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-form-label text-md-right col-lg-3" for="site">Issue Detected (MM/DD/YY)</label>
                                <div class="col-lg-8">
                                        <input readonly type='date' class="form-control align-content-center" id="date" name="issue_detected_at" value="{{ $request->date_detected_at }}"/>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-md-right col-lg-3" for="engineer">Technical Engineer</label>
                            <div class="col-lg-8">
                                @if(Auth::user()->hasRole('Admin'))
                                    <select class="form-control hospital" id="engineer" name="cp_name">
                                        <option value="0" disabled="true" selected="true">Choose Engineer</option>
                                        @foreach($users as $user)
                                            <option value="{{$user->name}}">{{$user->name}}</option>
                                        @endforeach
                                    </select> 
                                @elseif(Auth::user()->hasRole('Engineer'))
                                    <input type="text" class="form-control" id="engineer" name="cp_name" value="{{ Auth::user()->name }}">
                                @endif 
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
