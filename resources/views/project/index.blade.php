@extends('layout.app')
@section('title', 'Project')
@section('content')


<br>
<br>
<br>
<div class="row">
	<div class="col-md-6">
		<a href="{{ route('project.create') }}" class="btn btn-success">Create</a>
		<a href="" class="btn btn-danger">Delete</a>
		<a href="" class="btn btn-warning">Edit</a>
		<a href="" class="btn btn-primary">View</a>
	</div>
</div>
<h2>List all project</h2>

	<div class="row">
		<div class="col-md-6">
			<table class="table table-borded">
				<thead>
					<th>Name</th>
					<th>Details</th>
				</thead>

				<tbody>
					@foreach ($projects as $project)
						<tr>
							<td>{!! $project['name'] !!}</td>
							<td>{!! $project['details'] !!}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection