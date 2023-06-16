<html>
    <head>
        <title>not completed to do list</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Not Completed Tasks</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notCompletedTasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>Not Completed</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>

    
    