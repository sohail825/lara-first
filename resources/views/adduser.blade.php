@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center">Add New User</h1>
	<hr>
	<form action="{{route('users.store')}}" method="post">
		@csrf
		<div class="form-group">
			<label>Name:</label>
			<input type="text" name="name" class="form-control">
			@error('name')
			<div class="error">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="text" name="email" class="form-control">
			@error('email')
			<div class="error">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
			@error('password')
			<div class="error">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Ref ID</label>
			<input type="number" name="ref_id" class="form-control">
			@error('ref_id')
			<div class="error">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<input type="submit" value="Add User" class="btn btn-outline-primary">
		</div>
	</form>
</div>
@endsection