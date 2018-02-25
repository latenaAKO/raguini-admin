@extends('admin::layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-left">
                            <h1>Roles</h1>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('roles.create') }}" class="btn btn-primary">Add Role</a>
                        </div>
                        <table class="table">
                            <tbody>
                
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td class="text-right"><a href="{{ route('roles.edit', ['id' => $role->id]) }}" class="btn btn-primary">Edit</a></td>
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