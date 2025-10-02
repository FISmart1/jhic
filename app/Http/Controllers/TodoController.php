<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');

    $todos = Todo::when($search, function ($query, $search) {
        return $query->where('title', 'like', "%{$search}%")
                     ->orWhere('description', 'like', "%{$search}%");
    })->get();

    return view('todos.index', compact('todos', 'search'));
}


    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('todos.index')->with('success', 'Task added!');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $todo->update($request->all());

        return redirect()->route('todos.index')->with('success', 'Task updated!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Task deleted!');
    }
}
