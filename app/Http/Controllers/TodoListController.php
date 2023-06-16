<?php

namespace App\Http\Controllers;

use App\Models\TodoList;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todoLists = TodoList::all();

        return view('todo_lists.index', compact('todoLists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo_lists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $todoList = new TodoList;
        $todoList->title = $request->title;
        $todoList->description = $request->description;
        $todoList->completed = $request->completed ?? 0;
        $todoList->save();

        //TodoList::create($request->all());

        return redirect()->route('todo_lists.index')->with('success', 'To-do list created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TodoList $todoList)
    {
        return view('todo_lists.show', compact('todoList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TodoList $todoList)
    {
        $completedTasks = TodoList::where('completed', true)->get();
        return view('todo_lists.edit', compact('todoList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $todoList = TodoList::findOrfail($id);
        $todoList->title = $request->title;
        $todoList->description = $request->description;
        $todoList->completed = $request->completed ?? 0;
        $todoList->save();

        //TodoList::create($request->all());

        return redirect()->route('todo_lists.index')->with('success', 'To-do list created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoList $todoList)
    {
        $todoList->delete();

        return redirect()->route('todo_lists.index')->with('success', 'To-do list deleted successfully.');
    }

    public function completedTasks()
    {
        $completedTasks = TodoList::where('completed', true)->get();

        return view('todo_lists.completed', compact('completedTasks'));
    }

    public function notCompletedTasks()
    {
        $notCompletedTasks = TodoList::where('completed', false)->get();

        return view('todo_lists.not_completed', compact('notCompletedTasks'));
    }


}
