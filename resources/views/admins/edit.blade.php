@extends('layouts.app')
@section('content')
<div class="container">
	<h2 class="text-center">Assing Role To {{$admin->name}}</h2>
	<div class="row">
		<div class="col-md-8 offset-md-3">
			<div class="card">
				<div class="card-header">
					<p class="lead">Edit Role</p>
				</div>
				<div class="card-body">
					<form action="{{ route('admins.update',$admin) }}" method="POST">
						@csrf
						{{ method_field('PUT') }}
						@foreach ($roles as $role)
						<div class="form-check">
							<input type="checkbox" name="roles[]" value="{{$role->id}}"
								@if($admin->roles->pluck('id')->contains($role->id))
							checked
							@endif
							>
							<label>{{$role->name }}</label>
						</div>
						@endforeach
						<button type="submit" class="btn btn-sm btn-outline-success">Role Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection