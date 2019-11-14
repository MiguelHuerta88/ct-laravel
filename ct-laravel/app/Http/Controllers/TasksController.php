<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
	/**
	 * Tasks model instance
	 */
	public $tasks;

	/**
	 * Constructor
	 *
	 * @param      \App\Models\Tasks  $tasks  The tasks
	 */
    public function __construct(Tasks $tasks)
    {
    	$this->tasks = $tasks;
    }

    public function index()
    {
    	// we need to pull all the records that we have and send it over to the view
    	$tasks = $this->tasks->orderBy('priority', 'desc')->get();

    	return view('tasks')->with(compact('tasks'));
    }

    public function create()
    {
    	
    }
}
