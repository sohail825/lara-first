@extends('layouts.app');
@section('content')
<div class="container">
	<h2>All Site Admins</h2>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Registration Date</th>
			<th colspan="2" class="text-center">Action</th>
		</tr>
		@foreach ($admins as $admin)
		<tr>
			<td>{{$admin->id}}</td>
			<td>{{$admin->name}}</td>
			<td>{{$admin->email}}</td>
			<td>{{implode(',',$admin->roles()->get()->pluck('name')->toArray())}}</td>
			<td>{{$admin->created_at->diffForHumans()}}</td>
			<td> <a class="btn btn-outline-primary" href="{{route('admins.edit',$admin->id)}}">Edit</a></td>
			<td>
				<form action="{{route('admins.destroy',$admin)}}" method="post">
					@csrf
					{{ method_field('DELETE')}}
					<button type="submit" class="btn btn-outline-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection