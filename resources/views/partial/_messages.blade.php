@if(session()->has('delete'))
    <div class="alert alert-danger" role="alert">
        <strong>Deleted : </strong>  {{session()->get('delete')}}
    </div>
@elseif(session()->has('create'))
    <div class="alert alert-success" role="alert">
        <strong>Created : </strong>  {{session()->get('create')}}
    </div>
@elseif(session()->has('edit'))
    <div class="alert alert-warning" role="alert">
        <strong>Edited : </strong>  {{session()->get('edit')}}
    </div>
@endif

@if(count($errors)>0)
    @foreach($errors as $error)
        <strong>Errror : </strong>
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach 
@endif