<html>
    <head>
        <title>Edit</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Edit To-do List</h2>

            <form action="{{ route('todo_lists.update', $todoList->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $todoList->title }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $todoList->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="completed">Status</label>
                    <select class="form-control" id="completed" name="completed">
                        <option value="0" {{ $todoList->completed == 0 ? 'selected' : '' }}>Not Completed</option>
                        <option value="1" {{ $todoList->completed == 1 ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
</html>
    

