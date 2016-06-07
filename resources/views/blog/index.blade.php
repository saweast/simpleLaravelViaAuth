@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-10 col-md-offset-1">
                <a class="btn btn-success" href="/blog/create"><i class="fa fa-btn fa-check"></i>Create new post</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach ($blogs as $blog)
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">{{ $blog->title }}</h3>
                        <time datetime="{{ $blog->created_at }}" class="pull-right">
                            {{ date("M d, Y", strtotime($blog->created_at)) }}
                        </time>
                    </div>
                    <div class="panel-body">
                        {!! $blog->body !!}
                    </div>
                    <h1>

                    </h1>
                    <div class="panel-footer clearfix">
                        <a href="/blog/{{ $blog->id }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/blog/{{ $blog->id }}/delete" class="btn btn-danger">Delete</a>
                        <span class="pull-right"><a href="blog/{{ $blog->users_id }}">{{ $blog->user()['name'] }} </a></span>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
