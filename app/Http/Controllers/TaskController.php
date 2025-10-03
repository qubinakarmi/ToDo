<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    // Add Task
    public function add(Request $request)
    {
        // Validate inputs
        $request->validate([
            'description' => 'required|string|max:255',
            'time' => 'required|date_format:H:i',
        ]);

        // Create and save new task
        $task = new Task();
        $task->description = $request->description;
        $task->time = $request->time;

        if ($task->save()) {
            return redirect('list')->with('success', 'Task added successfully!');
        }

        return back()->with('error', 'Failed to add task.');
    }

    // List all tasks
    public function listing()
    {
        $tasks = Task::orderBy('id', 'DESC')->get();
        return view('list_task', ['tasks' => $tasks]);
    }

    // Delete task
    public function delete($id)
    {
        $deleted = Task::destroy($id);

        if ($deleted) {
            return redirect('list')->with('success', 'Task deleted successfully!');
        }

        return back()->with('error', 'Failed to delete task.');
    }





public function modify($id)

{
   $tasks=Task::find($id);

   return view('edit-list',['tasks'=>$tasks]);
}


function editlist(Request $request,$id)

{
  $tasks=Task::find($id);
  $tasks->description=$request->description;
  $tasks->time=$request->time;



        if ($tasks->save()) {
            return redirect('list')->with('success', 'Task edited successfully!');
        }

        return back()->with('error', 'Failed to edit task.');
    }
}






