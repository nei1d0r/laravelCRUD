@extends('layout')

@section('content')

<h1 class="title">{{$project->title}}</h1>
<p class="content">{{$project->description}}</p>

<p>
    <a href="/projects/{{$project->id}}/edit">Edit</a>
</p>

@if($project->tasks->count())
    <div>
        @foreach ($project->tasks as $task)
            <div>
                <form method="POST" action="/tasks/{{ $task->id }}">
                    @method('PATCH')
                    @csrf
                    
                    <label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">
                        <input type="checkbox" name="completed" id="{{$task->id}}" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{$task->description}}
                    </label>
                <form>
            </div>
        @endforeach
    </div>
@endif

@endsection