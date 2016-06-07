@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h3 class="pull-left">Publishers</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach ($publishers as $publisher)
                            <li class="list-group-item">
                                {{ $publisher->name }} {{ $publisher->surname }}
                                <a href="/publishers/{{ $publisher->surname }}">Edit</a>
                                <a href="/publishers/{{ $publisher->surname }}">Delete</a>
                                <ul class="list-group">
                                    @foreach ($publisher->publishes as $publish)
                                        <li class="list-group-item">
                                            <a href="/publishes/{{ $publish->id }}">{{ $publish->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop