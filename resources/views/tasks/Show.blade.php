@extends('layouts.master')

@section('header')
    E202 - Projects
@stop
@section('content')
    <div class="list-group">
        <a href="#" clasS="list-group-item active">
            <h4 class="list-group-item-heading">Id task</h4>
            <h3 class="list-group-item-text">{{$tasks->id}}</h3>
        </a>
        <a href="#" clasS="list-group-item">
            <h4 class="list-group-item-heading">Name</h4>
            <h3 class="list-group-item-text">{{$tasks->name}}</h3>
        </a>
        <a href="#" clasS="list-group-item active">
            <h4 class="list-group-item-heading">Id project</h4>
            <h3 class="list-group-item-text">{{$tasks->project_id}}</h3>
        </a>
        <a href="#" clasS="list-group-item">
            <h4 class="list-group-item-heading">Slug</h4>
            <h3 class="list-group-item-text">{{$tasks->slug}}</h3>
        </a>
        <a href="#" clasS="list-group-item active">
            <h4 class="list-group-item-heading">Completed</h4>
            <h3 class="list-group-item-text">{{$tasks->completed}}</h3>
        </a>
        <a href="#" clasS="list-group-item active">
            <h4 class="list-group-item-heading">Description</h4>
            <h3 class="list-group-item-text">{{$tasks->description}}</h3>
        </a>
        <a href="#" clasS="list-group-item">
            <h4 class="list-group-item-heading">Created</h4>
            <h3 class="list-group-item-text">{{$tasks->created_at}}</h3>
        </a>
    </div>
@stop
@section('footer')
    <p>Pablo Gonzalez Rubio - 2017</p>
@stop