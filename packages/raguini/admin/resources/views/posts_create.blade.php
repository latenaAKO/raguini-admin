@extends('admin::layouts.admin')


@section('content')

    <div class="container">
        <h1>Create Post</h1>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">

                        @include('admin::partials.flash_message_error')
                        @include('admin::partials.flash_message_success')

                        {{ Form::open(['route' => 'posts.store']) }}
                            <div class="form-group">
                                <small>Title</small>
                                {{ Form::text('title', null, [ 'class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <small>Slug</small>
                                {{ Form::text('slug', null, [ 'class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                <small>Body</small>
                                {{ Form::textarea('body', null, [ 'class' => 'form-control', 'rows' => 4]) }}
                            </div>

                            {{ Form::submit('save', ['class' => 'btn btn-primary']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection