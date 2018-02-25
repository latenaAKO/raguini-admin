@if(count($errors) > 0 || Session::has('message_error'))
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{ $error }}
            <br>
        @endforeach
        {{ session('message_error') }}
    </div>
@endif