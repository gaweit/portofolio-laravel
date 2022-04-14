@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')

<h6 class="card-title">Edit Portfolio</h6>
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<form method="post" action="{{ route('admin.portfolio.update',$info->id) }}" enctype="multipart/form-data">
	@csrf
	 @method('PUT')
	<div class="form-group">
		<label for="icon">{{ __('Image 350x342px') }}</label>
		<input type="file" name="file" id="icon"  class="form-control" >
	</div>
	<div class="form-group">
		<label for="title">{{ __('Title')}}</label>
		<input type="text" name="title" id="title" class="form-control" required="" >
	</div>
	<div class="form-group">
		<label for="url">{{ __('Project Link')}}</label>
		<input type="text" id="url" name="url" class="form-control">
	</div>
	<div class="form-group">
		<label for="">{{ __('Link Target')}}</label>
		<select class="form-control" name="target" id="target">
			<option value="_self">_self</option>
			<option value="_blank">_blank</option>
		</select>
	</div>

	<div class="form-group">
		<label for="cat_id">{{ __('Category')}}</label>
		<select class="form-control" name="cat_id">
			@foreach(App\Category::latest()->get() as $categroy)
			<option value="{{ $categroy->id }}" @if($categroy->id==$info->cat_id) selected="" @endif>{{ $categroy->name }}</option>
			@endforeach
		</select>
	</div>
	<p style="display: none;">{!! $info->title !!}</p>
	<button class="btn btn-primary">Update</button>
</form>

@endsection

@section('script')

<script type="text/javascript">
	(function ($) {
		"use strict"
		
		let url= $('#link').attr('href');
		let target= $('#link').attr('target');
		let txt= $('#link').text();
		$('#url').val(url);
		$('#target').val(target);
		$('#title').val(txt);
		

	 })(jQuery);	
</script>
@endsection