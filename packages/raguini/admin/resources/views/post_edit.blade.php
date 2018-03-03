@extends('admin::layouts.admin')


@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" target="_blank">View Page</a>
    </div>
@endsection