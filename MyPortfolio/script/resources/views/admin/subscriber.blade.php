@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">Subscribers <a href="{{ route('admin.subscriber.create') }}" class="btn btn-primary float-right">Export Subscribers</a></h6>


<div class="table-responsive">
	<table class="table table-striped table-bordered zero-configuration text-center">
		<thead>
			<tr>
				<th>#</th>
				<th>Email</th>
				
				<th>Subscribed At</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($subscribers as $key => $subscriber)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $subscriber->email }}</td>
				<td>{{ $subscriber->created_at->diffForHumans() }}</td>
				
				
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