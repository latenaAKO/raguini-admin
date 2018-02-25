@extends('admin::layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Role</h1>
            <div class="row">
                <div class="col-sm-6">

                    @include('admin::partials.flash_message_error')
                    @include('admin::partials.flash_message_success')

                    <h2>{{ ucwords(implode(' ', explode('_', $role->name))) }}</h2>
                    {!! Form::open(['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}
                        <div class="form-group">
                            <small>Name</small>
                            {{ Form::text('name', $role->name, ['class' => 'form-control', 'disabled' => true]) }}
                        </div>
                        <div class="form-group">
                            <small>Permissions</small>

                            @foreach($permissions as $permission)
                                <div>
                                    <label for="{{ 'check-permission-' . $permission->name }}">
                                        {{ Form::checkbox('permissions[]', $permission->name, in_array($permission->name, $checkedPermissions), ['id' => 'check-permission-' . $permission->name]) }}
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