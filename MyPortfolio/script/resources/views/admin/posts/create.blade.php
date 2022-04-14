@section('style')
<link href="{{ asset('admin/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@extends('layouts.backend.app')

@section('content')
	<h6 class="card-title">Write Post</h6>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="name">Post Title</label>
		<input type="text" name="title" id="name" class="form-control input-rounded" placeholder="Enter Category Name" required="">

		
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<textarea class="summernote" name="content" id="content"></textarea>

		
	</div>
	<div class="form-group">
			<label for="category">Select Category</label>
		<select class="js-example-tokenizer form-control input-rounded" id="category" multiple="multiple" name="category[]">

			@foreach($categorys as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="tag">Tags</label>
		<input type="text" name="tag" id="tag" class="form-control" placeholder="input tag with comma (,)">
	</div>	
	<div class="form-group">
		<label for="thumbnail">Thumbnail</label>
		<input type="file" name="image" id="thumbnail" class="form-control" accept="image/*">
	</div>	
	<div class="form-group">
		<label>Is Featured?</label>
		<select class="form-control" name="featured">
			<option value="1">Enable</option>
			<option selected="" value="0">Disable</option>
		</select>
	</div>		
	<div class="form-group">
		<label for="meta_title">Meta Title</label>
		<input type="text" name="meta_title" id="meta_title" class="form-control input-rounded" >
	</div>
	<div class="form-group">
		<label for="meta_keyword">Meta Keyword</label>
		<input type="text" name="meta_keyword" id="meta_keyword" class="form-control input-rounded" >
	</div>
	<div class="form-group">
		<label for="meta_description">Meta Description</label>
		<textarea class="form-control " name="meta_description" id="meta_description"></textarea>
	</div>
	<button class="btn btn-primary">Create</button>
</form>


@endsection

@section('script')
<script src="{{ asset('admin/plugins/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('admin/plugins/summernote/dist/summernote-init.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
$(".js-example-tokenizer").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
</script>
@endsection