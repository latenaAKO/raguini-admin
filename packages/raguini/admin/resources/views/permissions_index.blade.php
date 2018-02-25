@extends('admin::layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-left">
                            <h1>Permissions</h1>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('permissions.create') }}" class="btn btn-primary">Add Permission</a>
                        </div>
                        <div class="clearfix"></div>

                        @include('admin::partials.flash_message_error')
                        @include('admin::partials.flash_message_success')

                        <table class="table">
                            <tbody>
                
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td>
                                        <td class="text-right">
                                            {{ Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'delete' ]) }}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection