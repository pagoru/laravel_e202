@extends('layouts.master')

@section('header')
    E202 - Projects
@stop
@section('content')

    @if(!$tasks->count())
        No projects
    @else
        <ul>
            @foreach($tasks as $task)
                <li><a href="{{route('projects.task.show', $task->project_id, $task->id)}}">Id task: {{$task->id}}</a></li>
                <ul>
                    <li>Name: {{$task->name}}</li>
                    <li>Project id: {{$task->project_id}}</li>
                    <li>Slug: {{$task->slug}}</li>
                    <li>Completed: {{$task->completed}}</li>
                    <li>Description: {{$task->description}}</li>
                    <li>Created at: {{$task->created_at}}</li>
                    <li>Updated at: {{$task->created_at}}</li>
                </ul>
            @endforeach
        </ul>
    @endif

@stop
@section('footer')
    <p>Pablo Gonzalez Rubio - 2017</p>
@stop