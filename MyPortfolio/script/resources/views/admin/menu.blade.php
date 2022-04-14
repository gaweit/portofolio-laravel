@section('style')

@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">{{ __('Menu Settings') }}</h6>


@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="table-responsive mt-2">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				
				<th>#</th>
				<th>Name</th>
				
				<th>Action</th>
				
		</tr>
		</thead>
		<tbody>
			
			
			@foreach($menus as $key => $row)
			<form method="post" action="{{ route('admin.menu.store') }}">
			@csrf
			<input type="hidden" name="id" value="{{ $row->id }}">
			<tr>
				<td>
				{{ $key+1 }}
				</td>
				<td>
				<input type="text" name="name" class="form-control" value="{{ $row->name }}">
				</td>
				<td>
					<button class="btn btn-md btn-primary" type="submit">Save</button>
				</td>
			</tr>
			</form>
			@endforeach
		</tbody>
	</table>


</div>


@endsection

@section('script')

@endsection