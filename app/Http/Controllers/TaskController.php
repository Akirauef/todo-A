<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class TaskController extends Controller
{
    function index()
    {
        $tasks = Task::all();
        //'task'を'tasks'に変更したところ治った。
        return view('tasks.index',['tasks'=>$tasks]);

    }
    
    function create()
    {   
        return view('tasks.create');
    }

    function store(Request $request)
    {
        //まずは、エラー発生時はログインしているか確認する
        $task = new Task;
        $task -> title = $request -> title;
        $task -> contents = $request -> contents;
        $task -> user_id = Auth::id();
        $task -> save();
        return redirect()->route('tasks.index');
    }

    function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show',['task'=>$task]);
    }

    function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit',['task'=>$task]);
    }

    function update(Request $request, $id)
    {
        $task = Task::find($id);

        $task -> title = $request -> title;
        $task -> contents = $request -> contents;
        $task -> save();

        return view('tasks.show',['task'=>$task]);
    }

    function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect()->route('tasks.index');
    }
}
