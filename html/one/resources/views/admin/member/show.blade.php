@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<form name="form1" method="post" action="">
				<div class="bg-light rounded h-100 p-4">
					<h6 class="mb-4">Member</h6>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">{{ $row->id }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Member Name</label>
						<div class="col-sm-10">{{ $row->name }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Member ID</label>
						<div class="col-sm-10">{{ $row->user_id }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Member PW</label>
						<div class="col-sm-10">{{ $row->pw }}</div>
					</div>
					<div class="row mb-3">
						@php
							$tel1 = trim(substr($row->tel,0,3));
							$tel2 = trim(substr($row->tel,3,4));
							$tel3 = trim(substr($row->tel,7,4));
							$tel = $tel1 . "-" . $tel2 . "-" . $tel3;
						@endphp
						<label class="col-sm-2 col-form-label">Member Tel</label>
						<div class="col-sm-10">{{ $tel }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Member Address</label>
						<div class="col-sm-10">{{ $row->address }}</div>
					</div>
					<div class="row mb-3">
						@php
							$row_rank = $row->rank;
							$rank = $row_rank==0 ? 'Member' : ($row_rank==1 ? 'Worker' : ($row_rank==2 ? 'Admin' : 'Error'));
						@endphp
						<label class="col-sm-2 col-form-label">Member Rank</label>
						<div class="col-sm-10">{{ $rank }}</div>
					</div>
					
					<div align="center">
						<a href="{{ route( 'member.edit', $row->id ) }}{{ $tmp }}" class="btn btn-primary">Edit</a>
						<form action="{{ route( 'member.destroy', $row->id ) }}" style="display: inline-block;">
						@csrf
						@method('DELETE')
							<button type="submit" class="btn btn-warning" onClick="return confirm('Confirm delete?');">Delete</button>
						</form>
						<input type="button" class="btn btn-secondary" onClick="history.back();" value="Back">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection