@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>
                    <ul class="list-group">
                        @foreach ($users as $user)
                            <li class="list-group-item clearfix x2">
                                {{$user->name}}
                                <div class="pull-right">
                                    <a href="/users/{{ $user->id }}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/users/{{ $user->id }}/delete" class="btn btn-danger">Delete</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
@stop