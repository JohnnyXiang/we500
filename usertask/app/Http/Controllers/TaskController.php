<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;
class TaskController extends Controller
{
    
    public function __construct()
	{
	    $this->middleware('auth');
	}


	 /**
	 * Display a list of all of the user's task.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $tasks = Task::all();

	    return view('tasks.index', [
	        'tasks' => $tasks,
	    ]);
	}



	/** * Create a new task. 
	* 
	* @param Request $request 
	* @return Response 
	*/ 
	public function save(Request $request) { 
	    $this->validate($request, [
	      'name' => 'required|max:255',

	    ]);

	    $task = new Task; 
	    $task->name = $request->name; 
	    $task->save();

	    return redirect('/tasks'); 
	}


	/**
	 * delete the given task.
	 *
	 * @param  Request  $request
	 * @param  string  $taskId
	 * @return Response
	 */
	public function delete(Request $request, $taskId)
	{  
		
	    $task = Task::findOrFail($taskId);
	    $task->delete();
	    return redirect('/tasks');

	}

}
