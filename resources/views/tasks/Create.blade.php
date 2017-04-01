@extends('layouts.master')

@section('header')
    E202 - Projects
@stop
@section('content')

    {!! !Form::open(array('url' => 'tasks')) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('completed', 'Completed:') !!}
            {!! Form::checkbox('completed', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::checkbox('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}

@stop
@section('footer')
    <p>Pablo Gonzalez Rubio - 2017</p>
@stop