@extends('layouts.app')
@section('content')
<div class="container">
	@if(Session::has('added'))
	<div class="alert alert-success"> {{Session::get('added')}}</div>
	@endif
	@if(Session::has('updated'))
	<div class="alert alert-warning"> {{Session::get('updated')}}</div>
	@endif
	@if(Session::has('deleted'))
	<div class="alert alert-danger"> {{Session::get('deleted')}}</div>
	@endif
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Ref ID</th>
				<th scope="col">Date</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($stu as $data)


			<tr>
				<td>{{$data->id}}</td>
				<td>{{$data->name}}</td>
				<td>{{$data->email}}</td>
				<td>{{$data->ref_id}}</td>
				<td>{{$data->created_at->diffForHumans()}}</td>
				<td>
					<a class="btn btn-outline-info btn-sm" href="{{route('users.edit',$data->id)}}">Edit</a>

				</td>
				<td>

					<form action="{{route('users.destroy',$data->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a class="btn btn-outline-success" href="{{route('users.create')}}">Add New User</a>
</div>

@endsection