@extends('layout.app')
@section('title', 'Project')
@section('content')

<h2>Create new project</h2>

	<div class="row">
		<div class="col-md-6">
			<form action="{{ route('project.store') }}" method="POST" class="form-horizontal">

				  {{ csrf_field() }}
				<div class="row">
					<div class="col-md-12">
						<label>Name</label>
						<input type="text" name="name" class="form-control">
					
						<label>Details</label>
						<textarea name="details" class="form-control"></textarea>
						<br>
						<button class="btn btn-success">Submit</button>
					</div>
				</div>

			</form>
		</div>
	</div>

@endsection