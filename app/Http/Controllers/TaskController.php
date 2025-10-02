<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    function add(Request $request)
    {
      $tasks=new Task();
      $tasks->description=$request->description;
      if($tasks->save())
      {
        return redirect('list'); ///route name 
      }


 
    }

function listing()

{

    $tasks=Task::orderBy('id','DESC')->get();
    return view('list_task',['tasks'=>$tasks]);
 
}

function delete($id)

{

 
    $deleted=Task::destroy($id);
 
    if($deleted){
        return redirect('list');
    }
    else{
        return 'error while deleting';
    }
  
}
}
