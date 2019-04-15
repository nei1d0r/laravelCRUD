<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<body>
    <h1>Projects<h1>
    @foreach($projects as $project)
        <h2>{{$project->title}}</h2>
        <p>{{$project->description}}</p>
        <hr/>
    @endforeach
</body>
</html>