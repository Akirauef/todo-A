<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {   
        $tasks = Task::all();
        return view('tasks.index',['tasks'=>$tasks]);
    }
}
