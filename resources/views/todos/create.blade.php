<h1>Add Task</h1>
<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Task Title" required>
    <textarea name="description" placeholder="Task Description"></textarea>
    <button type="submit">Save</button>
</form>
<a href="{{ route('todos.index') }}">Back</a>
