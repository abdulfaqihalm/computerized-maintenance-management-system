@extends('layouts.app')

@section('title','| Edit Parts')

@section('stylesheets')
    <!-- For addition styelsheets -->
<<<<<<< HEAD
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row main-content justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Edit Part</h3>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('part.update', $part->part_number)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="part-number">Part Number</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="part-number" name="part_number" value="{{ old('part-number', $part->part_number) }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="modality">Modality</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="modality" name="modality" value="{{ old('modality', $part->modality) }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="category">Category</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $part->category) }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="block">Block</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="block" name="block" value="{{ old('block', $part->block) }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="name">Description</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="name" name="description" value="{{ old('description', $part->description) }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="cost">Cost</label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" id="cost" name="cost" value="{{ old('cost', $part->cost) }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-3 text-md-right" for="quantity">Quantity</label>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $part->quantity) }}" required>
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
=======
@endsection 

@section('content')
    <!-- Contents of this page -->
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
@endsection

@section('scripts')
    <!-- Scripts for this page -->
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> f98e99dd2ef8fde25cb06e935e0e3ef64d565bd5
