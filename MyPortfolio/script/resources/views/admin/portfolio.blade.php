
@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">{{ __('Service List') }} <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">{{ __('Service Create') }}</button></h6>

<!-- Modal -->
<div class="modal fade" id="basicModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ __('Service Create') }}</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="icon">{{ __('Image 350x342px') }}</label>
						<input type="file" name="file" id="icon"  class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="title">{{ __('Title')}}</label>
						<input type="text" name="title" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="link">{{ __('Project Link')}}</label>
						<input type="text" id="link" name="url" class="form-control">
					</div>
					<div class="form-group">
						<label for="">{{ __('Link Target')}}</label>
						<select class="form-control" name="target">
							<option value="_self">_self</option>
							<option value="_blank">_blank</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="cat_id">{{ __('Category')}}</label>
						<select class="form-control" name="cat_id">
							@foreach(App\Category::latest()->get() as $categroy)
							<option value="{{ $categroy->id }}">{{ $categroy->name }}</option>
							@endforeach
						</select>
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
				<th>Image</th>
				<th>Title</th>
				
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($info as $key => $row)
			<tr>
				<td>{{ $key+1 }}</td>
				<td><img src="{{ asset($row->image) }}" class="icon"></td>
				<td>{!! $row->title !!}</td>
				

				<td>
					<a href="{{ route('admin.portfolio.edit',$row->id) }}"  class="btn btn-sm btn-success text-white" ><i class="fa fa-edit"></i> </a>
					<a href="{{ route('admin.portfolios.delete',$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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