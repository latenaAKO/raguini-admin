@extends('admin::layouts.admin')


@section('content')

    <div class="container">
        <h1>Posts</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>Date Created</th>
                                <th>Date Published</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->author_id }}</td>
                                        <td>{{ $post->author_id }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td><a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-primary btn-sm">Edit</a></td>
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