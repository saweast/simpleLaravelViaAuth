@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($publishes as $publish)
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="pull-left">{{ $publish->title }}</h3>
                        <time datetime="{{ $publish->created_at }}" class="pull-right">
                            {{ date("M d, Y", strtotime($publish->created_at)) }}
                        </time>
                    </div>
                    <div class="panel-body">
                        {!! $publish->body !!}
                    </div>
                    <div class="panel-footer clearfix">
                        <a href="/publishes/{{ $publish->id }}">Edit</a>
                        <a href="/publishes/{{ $publish->id }}">Delete</a>
                        <a href="/publisher/{{ $publish->publisher->surname }}" class="pull-right">{{ $publish->publisher->surname }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop