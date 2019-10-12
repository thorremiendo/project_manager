@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/projects/{{ $project->id }}/tasks">
			@csrf
		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" name='title' placeholder="Title">
		  </div>
		  <div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" name="description" placeholder="Description">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection