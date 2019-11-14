@extends('layouts.master')
@section('title', 'Edit Task')
@section('content')
    <h2><span class="badge badge-secondary">Edit Task</span></h2>
    <form method="post" action="{{ route('task.update', ['task' => $tasks->id]) }}">
        @csrf
        <div class="form-group">
            <label for="name">Task Name</label>
            <input name="name" type="text" class="form-control @if($errors->has('name'))is-invalid @endif" placeholder="Enter name" value="{{ $tasks->name }}">
            @if ($errors->has('name'))
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="priority">Priority</label>
            <input type="number" class="form-control @if($errors->has('priority'))is-invalid @endif" placeholder="Enter priority" min="1" max="20" name="priority" value="{{ $tasks->priority }}">
            @if ($errors->has('priority'))
                <div class="invalid-feedback">{{ $errors->first('priority') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
