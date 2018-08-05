@extends('layouts.app')

@section('title','| User Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center main-content">
        <div class="col-md-8 col-md-offset-2">
            <div class="card shadow-sm">
                <h3 class="text-center card-header">User Edit</h3>
                <div class="card-body">
                    <form method="POST" action="{{route('user.update', $user->id)}}">   
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                <div class="col-md-6">
                                        <select class="form-control" name="role">
                                                @foreach($roles as $role)
                                                    <option value ='{{$role->id}}'>{{$role->name}}</option>
                                                @endforeach 
                                        </select>
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
    </div>
</div>
@endsection
