@extends('layouts.app')

@section('content')
    <div class="container">
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
                    <div class="panel-footer clearfix">
                        <span class="pull-right"><a href="blog/{{ $blog->users_id }}">{{ $users[($blog->users_id) -1]->name  }}</a></span>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
