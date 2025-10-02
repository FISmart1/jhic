<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h1>✏️ Edit Task</h1>

        <form action="{{ route('todos.update', $todo->id) }}" method="POST" class="form-card">
            @csrf @method('PUT')

            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" id="title" name="title" value="{{ $todo->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Task Description</label>
                <textarea id="description" name="description">{{ $todo->description }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn edit">Update</button>
                <a href="{{ route('todos.index') }}" class="btn reset">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
