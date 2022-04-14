@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">{{ __('Socials') }} <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">{{ __('Create New') }}</button></h6>

<!-- Modal -->
<div class="modal fade" id="basicModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ __('Create New Social Link') }}</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="{{ route('admin.social.store') }}">
					@csrf
					<div class="form-group">
						<label class="name">{{ __('CLass Name') }} <a href="https://fontawesome.com/" target="_blank" class="text-primary">{{ __('Fontawesome') }}</a></label>
						<input type="text" name="classname" id="name" class="form-control"  required="" placeholder="Enter Fontawesome Class Name">
					</div>
					<div class="form-group">
						<label class="percent">{{ __('Url') }}</label>
						<input type="text" name="link" id="percent" class="form-control" required="">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
					<button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="table-responsive">
	<table class="table table-striped table-bordered zero-configuration text-center">
		<thead>
			<tr>
				<th>#</th>
				<th>{{ __('Class Name') }}</th>
				<th>{{ __('Link') }}</th>
				<th>{{ __('Action') }}</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($socials as $key => $social)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $social->icon }}</td>
				<td>{{ $social->link }}</td>
				
				
				<td>
					<button type="button" class="btn btn-sm btn-success text-white" data-toggle="modal" data-target="#basicModal{{ $key }}"><i class="fa fa-edit"></i> </button>
					<a href="{{ route('admin.socials.destroy',$social->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
				</td>
				
			</tr>
			<div class="modal fade" id="basicModal{{ $key }}">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">{{ __('Edit') }}</h5>
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" action="{{ route('admin.social.update',$social->id) }}">
								@csrf
								@method('PUT')
								<div class="form-group">
									<label class="name">{{ __('CLass Name') }}  <a href="https://fontawesome.com/" target="_blank" class="text-danger">{{ __('Fontawesome') }}</a> </label>
									<input type="text" name="classname" id="name" class="form-control"  required="" placeholder="Enter Fontawesome Class Name" value="{{ $social->icon }}">
								</div>
								<div class="form-group">
									<label class="percent">{{ __('Url') }}</label>
									<input type="text" name="link" id="percent" class="form-control" required="" value="{{ $social->link }}">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
								<button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
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