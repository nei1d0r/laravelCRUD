@extends('layout')

@section('content')
    <h1 class="title">Create New Project</h1>
    <form method="POST" action="/projects">
        @csrf

        <div class ="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Title" value="{{old('title')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea {{$errors->has('description') ? 'is-danger' : ''}}" name="description" placeholder="Description">{{old('description')}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Submit</button>    
            </div>
        </div>

        @if($errors->any())
        <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
        </ul>
        @endif

    </form>
@endsection