@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Audits</h1>
                <table class="table table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>User Id</th>
                        <th>Checklist Id</th>
                    </thead>
        
                    <tbody>
                        @foreach($audits as $audit)
                            <tr>
                                <td>{{ $audit->id }}</td>
                                <td>{{ $audit->name }}</td>
                                <td>{{ $audit->user_id }}</td>
                                <td>{{ $audit->checklist_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $audits->links() }}
            </div>
        </div>
    </div>
@endsection