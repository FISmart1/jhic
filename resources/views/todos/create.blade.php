<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h1>➕ Add Task</h1>

        <form action="{{ route('todos.store') }}" method="POST" class="form-card">
            @csrf

            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" id="title" name="title" placeholder="Enter task title" required>
            </div>

            <div class="form-group">
                <label for="description">Task Description</label>
                <textarea id="description" name="description" placeholder="Enter task description"></textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Save</button>
                <a href="{{ route('todos.index') }}" class="btn reset">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
