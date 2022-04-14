@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">Category List</h6>
<div class="table-responsive">
	<table class="table table-striped table-bordered zero-configuration text-center">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Count</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $key => $category)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $category->name }}</td>
				
				<td>{{ DB::table('portfolio')->where('cat_id',$category->id)->count() }}</td>
				<td><a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i></a>
				<a href="{{ route('admin.categorys.delete',$category->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
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