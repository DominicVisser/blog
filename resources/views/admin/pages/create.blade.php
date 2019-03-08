@extends('layouts.admin')

@section('content')

    <h1>Create Pages</h1>

    {!! Form::open(['route' => 'admin.pages.store', 'method' => 'Post', 'files' => true]) !!}

    <div class="form-group row">
        <label class="col-sm-3">
            Slug
        </label>
        <div class="col-sm-9 input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">{{ route('page', ['slug' => '/']) }}/</span>
            </div>
            {!! Form::text('slug', ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3">
            Image
        </label>
        <div class="col-sm-9">
            <div class="input-group-prepend">
                {!! Form::file('image', ['class' => 'form-control','autocomplete' => 'off']) !!}
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3">
            Title
        </label>
        <div class="col-sm-9">
            <div class="input-group-prepend">
                {!! Form::text('title', '', ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3">
            Body
        </label>
        <div class="col-sm-9">
            {!! Form::textarea('body', '', ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3">
            Active
        </label>
        <div class="col-sm-9">
            {!! Form::checkbox('active', 1, true, []) !!}
        </div>
    </div>

    <div class="form-group row">
        <button type="submit">save</button>
    </div>

    {!! Form::close() !!}


@stop