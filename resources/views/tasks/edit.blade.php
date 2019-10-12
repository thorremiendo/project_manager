@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/projects/tasks/{{ $task->id }}/update">
			@csrf
		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" name='title' placeholder="Title" value='{{ $task->title }}'>
		  </div>
		  <div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" name="description" placeholder="Description" value='{{ $task->description }}'>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection