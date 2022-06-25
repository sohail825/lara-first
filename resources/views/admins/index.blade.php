@extends('layouts.app');
@section('content')
<div class="container">
	<h2>All Site Admins</h2>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Registration Date</th>
			<th colspan="2" class="text-center">Action</th>
		</tr>
		@foreach ($admins as $admin)
		<tr>
			<td>{{$admin->id}}</td>
			<td>{{$admin->name}}</td>
			<td>{{$admin->email}}</td>
			<td>{{$admin->created_at->diffForHumans()}}</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection