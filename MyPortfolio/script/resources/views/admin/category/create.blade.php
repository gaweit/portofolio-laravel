@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')

<h6 class="card-title">Create Category</h6>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('admin.category.store') }}">
	@csrf
	<div class="form-group">
		<label for="name">Category Name</label>
		<input type="text" name="name" id="name" class="form-control input-rounded" placeholder="Enter Category Name" required="">

		
	</div>
	
	<button class="btn btn-primary">Create</button>
</form>
@endsection

@section('script')

@endsection