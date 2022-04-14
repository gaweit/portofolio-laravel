@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')

<h6 class="card-title">About Section</h6>
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="row">
	<div class="col-md-8">
		<form method="post" action="{{ route('admin.about.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="name">About Description</label>
				<textarea class="form-control" required name="description">{{ $info->description }}</textarea>
			</div>
			<div class="form-group">
				<label for="cv">CV</label>
				<input type="file" name="cv" class="form-control">
			</div>
			<div class="form-group">
				<label for="file">Image</label>
				<input type="file" name="file" class="form-control" accept="image/*">
			</div>

			<button class="btn btn-primary">Update</button>
		</form>
	</div>
	<div class="col-md-4">
		<h5>About Image</h5>
		<img src="{{ asset($info->image) }}" class="img-fluid about-img" >
	</div>
</div>
@endsection

@section('script')

@endsection