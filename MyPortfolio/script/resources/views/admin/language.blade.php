@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">{{ __('Language Settings') }}</h6>


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
	<table class="table table-striped table-bordered  text-center">
		<thead>
			<tr>
				
				<th>English</th>
				<th>Bangali</th>
				<th>Portuguese</th>
				<th>Hindi</th>
				<th>Malayalam</th>
				<th>Custom</th>
				<th>Action</th>
				
		</tr>
		</thead>
		<tbody>
			
			
			@foreach($langs as $key => $row)
			<form method="post" action="{{ route('admin.language.store') }}">
			@csrf
			<input type="hidden" name="id" value="{{ $row->id }}">
			<tr>
				<td>
				<input type="text" name="en" class="form-control" value="{{ $row->en }}">
				</td>
				<td>
				<input type="text" name="bn" class="form-control" value="{{ $row->bn }}">
				</td>
				<td>
				<input type="text" name="pt" class="form-control" value="{{ $row->pt }}">
				</td>
				<td>
				<input type="text" name="hi" class="form-control" value="{{ $row->hi }}">
				</td>
				<td>
				<input type="text" name="ml" class="form-control" value="{{ $row->ml }}">
				</td>
				<td>
				<input type="text" name="custom" class="form-control" value="{{ $row->custom }}">
				</td>
				<td>
					<button class="btn btn-sm btn-primary" type="submit">Save</button>
					
				</td>
			</tr>
			</form>
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