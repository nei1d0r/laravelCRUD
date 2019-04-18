<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Create New Project</h1>
    <form method="POST" action="/projects">
        {{csrf_field()}}

        <div>
            <input type="text" name="title" placeholder="Title">
        </div>

        <div>
            <textarea name="description" placeholder="Description"></textarea>
        </div>

        <div>
            <button type="submit">Submit</button>    
        </div>

    </form>
</body>
</html>