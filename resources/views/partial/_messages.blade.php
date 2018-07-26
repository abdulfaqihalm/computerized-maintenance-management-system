@if(session()->has('submit'))
    <div class="alert alert-success" role="alert">
        <strong>Success : </strong>  {{session()->get('submit')}}
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