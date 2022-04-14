@section('style')
<link href="{{ asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@extends('layouts.backend.app')

@section('content')
<h6 class="card-title">Skill List <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#basicModal">Create Skill</button></h6>

<!-- Modal -->
<div class="modal fade" id="basicModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Create Skill</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="{{ route('admin.skill.store') }}">
					@csrf
					<div class="form-group">
						<label class="name">Skill Name</label>
						<input type="text" name="name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="percent">Percent</label>
						<input type="number" name="percent" class="form-control" required="">
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

<div class="table-responsive">
	<table class="table table-striped table-bordered zero-configuration text-center">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Percent</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach(App\Skill::latest()->get() as $key => $skill)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $skill->name }}</td>
				<td><span class="label gradient-1 btn-rounded">{{ $skill->percent }}%</span></td>
				
				<td>
					<button type="button" class="btn btn-sm btn-success text-white" data-toggle="modal" data-target="#basicModal{{ $key }}"><i class="fa fa-edit"></i> </button>
					<a href="{{ route('admin.skills.delete',$skill->id) }}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>
				</td>
				
			</tr>
			<div class="modal fade" id="basicModal{{ $key }}">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Skill</h5>
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="post" action="{{ route('admin.skill.update',$skill->id) }}">
								@csrf
								 @method('PUT')
								<div class="form-group">
									<label class="name">Skill Name</label>
									<input type="text" name="name" class="form-control" required="" value="{{ $skill->name }}">
								</div>
								<div class="form-group">
									<label class="percent">Percent</label>
									<input type="number" name="percent" class="form-control" required="" value="{{ $skill->percent }}">
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