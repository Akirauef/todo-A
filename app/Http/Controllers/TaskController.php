<?php

namespace App\Http\Controllers;
use App\Task;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
    function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));

    }
    
    function create()
    {
        return view('tasks.create');
    }

    function store(Request $request)
    {
        $task = new Task;
        $task -> title = $request -> title;
        $task -> body = $request -> body;
        $task -> user_id = Auth::id();
        $task -> save();
        return redirect()->route('tasks.index');
    }

    function show($id)
    {
        $task = Task::find($id);

        return view('posts.show',['task'=>$task]);
    }

    function edit($id)
    {
        $task = Task::find($id);

        return view('posts.edit',['task'=>$task]);
    }

    function update(Request $request, $id)
    {
        $task = Task::find($id);

        $task -> title = $request -> title;
        $task -> body = $request -> body;
        $task -> save();

        return view('tasks.show', compact('tasks'));
    }

    function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect()->route('tasks.index');
    }
}