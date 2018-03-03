@extends('admin::layouts.admin')

@section('content')
    <div class="container">
        <h1 class="font-weight-bold">{{ $post->title }}</h1>
        {!! $post->body !!}
    </div>
@endsection