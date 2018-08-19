@extends('layouts.app')

@section('title','| Create Purchase Order')

@section('stylesheets')
    <!-- For addition styelsheets -->
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Create New Purchase Order</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('purchase-order.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="title">Title</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Add Title..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="part_id">Part Number</label>
                            <div class="col-lg-8">
                                <select class="form-control part_id" id="part_id" name="part_id">
                                    <option value="0" disabled="true" selected="true">Choose Part Number</option>
                                    @foreach($parts as $part)
                                        <option value="{{$part->part_number}}">{{$part->part_number}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="qty">Quantity</label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" id="qty" name="qty" placeholder="Insert Quantity..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="cost">Cost</label>
                            <div class="col-lg-8">
                                <input type="number" readonly class="form-control" id="cost" name="cost" placeholder="Insert Cost..." required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="status">Status</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="status" name="status" placeholder="Insert Quantity..." required>
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
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>     
        //equal to ( document ).ready() 
        $(function(){
            $("select[name='part_id']").change(function(){
            var part_id = $(this).val();
            var token = $("input[name='_token']").val();
            console.log(part_id);
            $.ajax({
                url: "<? php echo route('select-ajax-purchase-order') ?>",
                method: 'POST',
                data: {part_id:part_id, _token:token},
                success: function(data) {
                    $("select[name='cost'").html('');
                    $("select[name='cost'").html(data.options);
                    
                }
                });
            });  
        });
    </script>
@endsection
