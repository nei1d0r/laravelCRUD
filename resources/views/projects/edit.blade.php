@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class ="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description">{{$project->description}}</textarea>
            </div>
        </div>

        <div class ="field">
            <div class="control">
                <button class="button is-info" type="submit">Update Project</button>
                <button class="button is-danger" type="submit">Delete Project</button>
            </div>
        </div>
    </form>

@endsection