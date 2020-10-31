@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <li>{{$error}}</li>
        </div>
    @endforeach
@endif