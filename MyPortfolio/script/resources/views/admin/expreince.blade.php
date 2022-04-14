

@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">{{ __('Experience List') }} <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">{{ __('Experience Create') }}</button></h6>

<!-- Modal -->
<div class="modal fade" id="basicModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ __('Experience Create') }}</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="{{ route('admin.experience.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="title">{{ __('Title') }}</label>
						<input type="text" name="title" id="title"  class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="date">{{ __('Date')}}</label>
						<input type="text" name="date" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="icon">{{ __('Icon')}}<a target="_blank" href="https://fontawesome.com/icons">(use fontawesome icon)</a></label>
						<input type="text" name="icon" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="description">{{ __('Description')}}</label>
						<textarea name="description" rows="5" class="form-control" name="description" id="description"></textarea>
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
				<th>Title</th>
				<th>Date</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($info as $key => $row)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $row->title }}</td>
				<td>{{ $row->date }}</td>
				<td>{{ Str::limit($row->description,50) }}</td>
				<td>
					<button type="button" class="btn btn-sm btn-success text-white" data-toggle="modal" data-target="#basicModal{{ $key }}"><i class="fa fa-edit"></i> </button>
					<a href="{{ route('admin.expreinces.delete',$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
				</td>

			</tr>
			<div class="modal fade" id="basicModal{{ $key }}">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{{ __('Edit Experience') }}</h5>
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" action="{{ route('admin.experience.update',$row->id) }}" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="form-group">
									<label for="title">{{ __('Title') }}</label>
									<input type="text" name="title" id="title" value="{{ $row->title }}"  class="form-control" required="">
								</div>
								<div class="form-group">
									<label for="date">{{ __('Date')}}</label>
									<input type="text" name="date" class="form-control" value="{{ $row->date }}" required="">
								</div>
								<div class="form-group">
									<label for="icon">{{ __('Icon')}}<a target="_blank" href="https://fontawesome.com/icons">(use fontawesome icon)</a></label>
									<input type="text" name="icon" value="{{ $row->icon }}" class="form-control" required="">
								</div>
								<div class="form-group">
									<label for="description">{{ __('Description')}}</label>
									<textarea name="description" rows="5" class="form-control" name="description" id="description">{{ $row->description }}</textarea>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save Changes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
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