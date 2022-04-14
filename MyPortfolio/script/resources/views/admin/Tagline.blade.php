@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">{{ __('Tagline') }} <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">{{ __('Tagline Create') }}</button></h6>

<!-- Modal -->
<div class="modal fade" id="basicModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ __('Tagline Create') }}</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="{{ route('admin.tagline.store') }}" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						<label for="tag_line">{{ __('Tagline')}}</label>
						<input type="text" name="tag_line" id="tag_line" class="form-control" required="">
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
				<th>Tagline</th>
				
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			@foreach($taglines as $key => $row)
			<tr>
				<td>{{ $key+1 }}</td>
				
				<td>{{ $row->tag_line }}</td>
				


				<td>
					<a href="{{ route('admin.taglines.destroy',$row->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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