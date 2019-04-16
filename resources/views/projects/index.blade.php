@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects<h1>
    @foreach($projects as $project)
        <h2>{{$project->title}}</h2>
        <p>{{$project->description}}</p>
        <hr/>
    @endforeach
</div>
@endsection