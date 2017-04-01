@extends('layouts.master')

@section('header')
    E202 - Projects
@stop
@section('content')

    @if(!$projects->count())
        No projects
    @else
        <ul>
            @foreach($projects as $project)
                <li><a href="{{route('projects.show', $project->id)}}">Id project: {{$project->id}}</a></li>
                <ul>
                    <li>Name: {{$project->name}}</li>
                    <li>Slug: {{$project->slug}}</li>
                    <li>Created at: {{$project->created_at}}</li>
                </ul>
            @endforeach
        </ul>
    @endif

@stop
@section('footer')
    <p>Pablo Gonzalez Rubio - 2017</p>
@stop