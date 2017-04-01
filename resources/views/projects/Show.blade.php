@extends('layouts.master')

@section('header')
    E202 - Projects
@stop
@section('content')

    <div class="list-group">
        <a href="#" clasS="list-group-item active">
            <h4 class="list-group-item-heading">Id project</h4>
            <h3 class="list-group-item-text">{{$project->id}}</h3>
        </a>
        <a href="#" clasS="list-group-item">
            <h4 class="list-group-item-heading">Name</h4>
            <h3 class="list-group-item-text">{{$project->name}}</h3>
        </a>
        <a href="#" clasS="list-group-item">
            <h4 class="list-group-item-heading">Slug</h4>
            <h3 class="list-group-item-text">{{$project->slug}}</h3>
        </a>
        <a href="#" clasS="list-group-item">
            <h4 class="list-group-item-heading">Created</h4>
            <h3 class="list-group-item-text">{{$project->created_at}}</h3>
        </a>
        <div class="list-group-item">
            @if(!$project->tasks->count())
                <div class="alert alert-warning" role="alert">No tasks</div>
            @else
                <h4 class="list-group-item-heading">Tasks</h4>
                <div class="list-group">
                    @foreach($project->tasks as $task)
                        <a class="list-group-item" href="{{route('projects.tasks.show', [$project->id, $task->id])}}"></a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) !!}
        <div class="btn-group" role="group">
            {!! link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}

@stop
@section('footer')
    <p>Pablo Gonzalez Rubio - 2017</p>
@stop