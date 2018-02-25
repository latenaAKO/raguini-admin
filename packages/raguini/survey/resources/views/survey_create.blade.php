@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create</h1>

       <div class="row">
           <div class="col-sm-6">
                @if(Session::has('message_success'))
                    <div class="alert alert-success">{{ Session::get('message_success') }}</div>
                @endif
                <form action="{{ route('audit.store') }}" method="POST">
                    {{ csrf_field() }}
        
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for=""><input type="checkbox" name="published"></label>Published
                    </div>
                    <input type="submit" class="btn btn-primary" value="Save">
                </form>
           </div>
       </div>
    </div>
@endsection