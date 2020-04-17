<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function getIndex()
    {
        // return view('todo.index');
        return view('todo.index', [
            'tasks' => Task::all()
        ]);
        // return view('todo.index', [
        //     'tasks' => Task::orderBy('title', 'desc')->get()
        // ]);
    }

    public function createTask(Request $request)
    {
        $tasks = new Task([
            'newTask' => $request->input('newTask')
        ]);
        $tasks->save();
    }
}
