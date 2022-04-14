@section('style')

@endsection
@extends('layouts.backend.app')

@section('content')

<div class="table-responsive">
	<form>
		<input type="text" class="form-control" name="src" required="" placeholder="Search Post....." value="{{ $src }}">
		<button type="submit" class="hidden"></button>
	</form>
<table class="table table-stripe table-hover text-center mt-2">
	<tr>
		<th>Thumbnail</th>
		<th>Title</th>
		<th>Slug</th>
		<th>Action</th>
	</tr>
	@foreach($posts as $post)
	<tr>
		<td><img src="{{ asset('uploads/'.$post->image) }}" class="thumbnail"></td>
		<td>{{ $post->name }}</td>
		<td>{{ url('/').'/blog/'.$post->slug }}</td>
		<td>
			<a href="{{ route('admin.post.edit',$post->id) }}" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i></a>
			<a href="{{ route('admin.posts.delete',$post->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
		</td>
	</tr>
	@endforeach
	
</table>
{{ $posts->links() }}
</div>	

@endsection

@section('script')

@endsection