<html>
    <head>
        <title>TO DO LIST</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>To-do Lists</h2>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href="{{ route('todo_lists.create') }}" class="btn btn-primary mb-3">Add New To-do</a>  <a class="btn btn-primary mb-3" href="{{ route('todo_lists.completed') }}">View Completed Tasks</a> <a class="btn btn-primary mb-3" href="{{ route('todo_lists.not_completed') }}">View Not Completed Tasks</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todoLists as $todoList)
                        <tr>
                            <td>{{ $todoList->title }}</td>
                            <td>{{ $todoList->description }}</td>
                            <td>{{ $todoList->completed ? 'Completed' : 'Not Completed' }}</td>
                            <td>
                                <form action="{{ route('todo_lists.destroy', $todoList->id) }}" method="POST" class="d-inline">
                                    <a class="btn btn-primary" href="{{ route('todo_lists.show', $todoList->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a class="btn btn-primary" href="{{ route('todo_lists.edit', $todoList->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </body>
</html>
    
    