<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        <h1>📌 To-Do List</h1>
        <a href="{{ route('todos.create') }}" class="btn">+ Add Task</a>
        <ul class="todo-list">
            @forelse($todos as $todo)
                <li class="todo-item {{ $todo->is_done ? 'done' : '' }}">
                    <div>
                        <strong>{{ $todo->title }}</strong> 
                        <span class="desc">{{ $todo->description }}</span>
                    </div>
                    <div class="actions">
                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn edit">Edit</a> 
                        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn delete">Delete</button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="empty">Belum ada task</li>
            @endforelse
        </ul>
    </div>
</body>
</html>
