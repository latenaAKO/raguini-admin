@extends('admin::layouts.admin')

@section('content')
    <div class="container">
        <h1>Add Role</h1>
            <div class="row">
                <div class="col-sm-6">

                    @include('admin::partials.flash_message_error')
                    @include('admin::partials.flash_message_success')

                    {!! Form::open(['route' => 'roles.store']) !!}
                        <div class="form-group">
                            <small>Role</small>
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            <small>Permissions</small>

                            @foreach($permissions as $permission)
                                <div>
                                    <label for="{{ 'check-permission-' . $permission->name }}">
                                        {{ Form::checkbox('permissions[]', $permission->name, false, ['id' => 'check-permission-' . $permission->name]) }}
                                        <h6 class="d-inline-block font-weight-bold">{{ ucwords(implode(' ', explode('_', $permission->name))) }}</h6>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    
                        {{ Form::submit('Save', ['class' => 'form-control']) }}
                    {!! Form::close() !!}
                </div>
            </div>
    </div>

@endsection