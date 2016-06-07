@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-10 col-md-offset-1">
                <a class="btn btn-warning" href="/blog"><i class="fa fa-btn fa-chevron-left"></i>Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new post</div>
                    <div class="panel-body">
                        <form action="/blog/{{ $blog->id }}/edit" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-2 control-label">Title</label>
                                <div class="col-md-8">
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $blog->title }}">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="Body" class="col-md-2 control-label">Body</label>
                                <div class="col-md-8">
                                    <textarea type="text" rows="10" id="body" class="form-control" name="body" value="">{{ $blog->body }}</textarea>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-check"></i> Save
                                    </button>
                                    <button type="reset" class="btn btn-danger pull-right">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection