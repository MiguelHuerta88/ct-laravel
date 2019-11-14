<?php

namespace App\Http\Controllers\Api;

use App\Models\Tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    //

    public function delete(Tasks $tasks)
    {
        // delete
        $tasks->delete();

        return response()->json(['success' => true]);
    }

    public function updatePriority(Tasks $tasks)
    {
        // pull the priority
        $priority = request()->get('priority');

        $tasks->update(['priority' => $priority]);

        return response()->json(['success' => true]);
    }
}
