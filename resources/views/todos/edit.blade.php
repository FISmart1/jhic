<h1>Edit Task</h1>
<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    @csrf @method('PUT')
    <input type="text" name="title" value="{{ $todo->title }}" required>
    <textarea name="description">{{ $todo->description }}</textarea>
    <button type="submit">Update</button>
</form>
<a href="{{ route('todos.index') }}">Back</a>
