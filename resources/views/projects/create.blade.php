@extends('layouts.master')
@section('content')
	<div class="container">
		<form action="/projects/store" method="POST">
			@csrf
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" name='title'>
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<input type="text" class="form-control" name='description'>
			</div>
			<div class="form-group">
				<label for="">Due Date</label>
				<input type="date" class="form-control" name='due_date'>
			</div>
			<button class="btn btn-primary">Submit</button>
		</form>		
	</div>
@endsection