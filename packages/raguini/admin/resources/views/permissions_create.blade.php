@extends('admin::layouts.admin')

@section('content')
    <div class="container">
        <h1>Add Permission</h1>
            <div class="row">
                <div class="col-sm-6">

                    @include('admin::partials.flash_message_error')
                    @include('admin::partials.flash_message_success')

                    {!! Form::open(['route' => 'permissions.store']) !!}
                        <div class="form-group">
                                <label for="">Permission</label>
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                    
                        {{ Form::submit('Save', ['class' => 'form-control']) }}
                    {!! Form::close() !!}
                </div>
            </div>
    </div>

@endsection