<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Todo;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $todos = auth()->user()->todo;

        return view('todo.index', compact('todos'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);

        auth()->user()->todo()->create($data);

        return redirect('/todo');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $data = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'completed' => 'required'
        ]);
        // dd($data);
        $todo->update($data);

        return redirect('/todo');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todo');
    }
}
