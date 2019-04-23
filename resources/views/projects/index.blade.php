@extends('layout')

@section('content')
<div class="container">
    <h1 class="title">Projects<h1>
    <a href="/projects/create">Create New Project</a>
    <br>
    <ul>
    @foreach($projects as $project)
        <li>
            <a href="/projects/{{$project->id}}">
                {{$project->title}}
            </a>
        </li>    
    @endforeach
    </ul>
</div>
@endsection