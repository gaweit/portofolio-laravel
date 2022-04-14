@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">{{ __('Testimonial') }} <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">{{ __('Testimonial Create') }}</button></h6>

<!-- Modal -->
<div class="modal fade" id="basicModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ __('Testimonial Create') }}</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="{{ route('admin.testimonial.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="icon">{{ __('Profile Image') }}</label>
						<input type="file" name="avatar" id="icon"  class="form-control" >
					</div>
					<div class="form-group">
						<label for="name">{{ __('Name')}}</label>
						<input type="text" name="name" id="name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="position">{{ __('position')}}</label>
						<input type="text" name="position" id="position" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="description">{{ __('Review')}}</label>
						<textarea  name="review" class="form-control" id="description" required=""></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="table-responsive">
	<table class="table table-striped table-bordered zero-configuration text-center">
		<thead>
			<tr>
				<th>#</th>
				<th>Avatar</th>
				<th>Client Name</th>
				<th>Position</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($testimonials as $key => $row)
			<tr>
				<td>{{ $key+1 }}</td>
				<td><img src="{{ asset($row->avatar) }}" class="icon"></td>
				<td>{{ $row->name }}</td>
				<td>{{ $row->position }}</td>


				<td>
					<a href="{{ route('admin.testimonials.delete',$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection

@section('script')
<script src="{{ asset('admin/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
@endsection