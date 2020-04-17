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
            'tasks' => Task::orderBy('title', 'desc')->get()
        ]);
    }

    public function createTask(Request $request)
    {
        $tasks = new Task([
            'newTask' => $request->input('newTask')
        ]);
        $tasks->save();
    }

    public function editTask(Request $request)
    {
        $task = Task::find($req->input('id'));
        $task->title = $req->input('title');
        $task->save();

        return redirect()->route('getIndex')->with([
            'info' => 'Your Task' . $req->input('title') . ' updated successfully! '
        ]);
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);

        $task->delete();

        return redirect()->route('getIndex')->with([
            'info' => 'Your task ' . $task->title . ' deleted successfully!'
        ]);
    }
}
