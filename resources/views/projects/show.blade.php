@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Title</th>
					<th scope="col">Description</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($project->tasks as $task)
					<tr>
						<td>{{ $task->id }}</td>
						<td>{{ $task->title }}</td>
						<td>{{ $task->description }}</td>
						<td>
							<a href="/projects/tasks/{{ $task->id }}/edit">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/projects/{{ $project->id }}/tasks'>Add a new Task</a>
	</div>
@endsection