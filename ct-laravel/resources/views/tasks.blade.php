@extends('layouts.master')

@section('content')
	<h1><div class="badge badge-secondary">All Tasks</div></h1>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Priority</th>
	      <th scope="col">Name</th>
	      <th scope="col">Created</th>
	      <th scope="col">Updated At</th>
	      <td scope="col">Edit/Delete</td>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($tasks as $index => $task)
	    	<tr>
	    		<td>{{ $index }}</td>
	    		<td>{{ $task->priority}}
    			<td>{{ $task->name }}</td>
    			<td>{{ $task->created_at }}</td>
    			<td>{{ $task->updated_at }}</td>
    			<td>
    				<button class="btn btn-warning">Edit</button>
    				<button class="btn btn-danger">Delete</button>
    			</td>
    		</tr>
	    @endforeach
	  </tbody>
	</table>

	{{-- create the form to create new task --}}
	<h2><span class="badge badge-secondary">Add/Edit Task</span></h2>
	<form method="post" action="{{ route('task.create') }}">
		@csrf

	  <div class="form-group">
	    <label for="name">Task Name</label>
	    <input type="text" class="form-control" placeholder="Enter name" required>
	  </div>
	  <div class="form-group">
	   	<label for="name">Task Name</label>
	    <input type="number" class="form-control" placeholder="Enter priority" min="1" max="20" required>
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Submit</button>

	</form>
@endsection