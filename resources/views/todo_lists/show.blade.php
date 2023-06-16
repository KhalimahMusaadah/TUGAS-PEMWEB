<html>
    <head>
        <title>
            Show To do
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5"></div>
        <table class="table">
            <tr>
                <th>Title</th>
                <td>{{ $todoList->title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $todoList->description }}</td>
            </tr>
            <tr>
                <th>status</th>
                <td>{{ $todoList->completed ? 'Completed' : 'Not Completed' }}</td>
            </tr>
        </table>
    </body>
</html>

<!--@section('content')
    <h2>{{ $todoList->title }}</h2>

    <p>{{ $todoList->description }}</p>
    <p>Status: </p>

