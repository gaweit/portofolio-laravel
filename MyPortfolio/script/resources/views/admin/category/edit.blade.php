@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')

<h6 class="card-title">Edit Category</h6>
<form method="post" action="{{ route('admin.category.update',$info->id) }}">
	@csrf
	 @method('PUT')
	<div class="form-group">
		<label for="name">Category Name</label>
		<input type="text" name="name" id="name" class="form-control input-rounded" placeholder="Enter Category Name" required value="{{ $info->name }}">

		
	</div>
	
	
	<button class="btn btn-primary">Update</button>
</form>
@endsection

@section('script')

@endsection