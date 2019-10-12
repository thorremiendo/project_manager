@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Login
			</div>
			<div class="card-body">
				@isset($error)
					<li class="alert alert-danger">{{ $error }}</li>
				@endisset
				<form action="/login" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Email Address:</label>
						<input type="text" class="form-control" name='email'>
					</div>
					<div class="form-group">
						<label for="">Password:</label>
						<input type="password" class="form-control" name='password'>
					</div>
					<button class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection