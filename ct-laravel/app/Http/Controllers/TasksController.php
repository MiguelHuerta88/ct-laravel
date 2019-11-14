<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Http\Requests\CreateTaskRequest;
use Carbon\Carbon;

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

    /**
     * Show all tasks
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	// we need to pull all the records that we have and send it over to the view
    	$tasks = $this->tasks->orderBy('priority', 'desc')->get();

    	return view('tasks')->with(compact('tasks'));
    }

    public function create(CreateTaskRequest $request)
    {
        $attributes = $request->only('name','priority');

        // we need to fill in the created_at,updated_at columns since we are doing a mass insert
        $attributes['created_at'] = Carbon::now();
        $attribute['updated_at'] = Carbon::now();

        $created = $this->tasks->create($attributes);

        if ($created) {
            return redirect()->to('tasks');
        }

        return redirect()->back()->withInput($attributes);
    }
}
