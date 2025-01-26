@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<form name="form1" method="post" action="">
				<div class="bg-light rounded h-100 p-4">
					<h6 class="mb-4">Company</h6>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">{{ $row->id }}</div>
					</div>
					<div class="row mb-3">
						<label for="inputCompany" class="col-sm-2 col-form-label">Company Name</label>
						<div class="col-sm-10">{{ $row->name }}</div>
					</div>
					<div class="row mb-3">
						@php
							$tel1 = trim(substr($row->tel,0,3));
							$tel2 = trim(substr($row->tel,3,4));
							$tel3 = trim(substr($row->tel,7,4));
							$tel = $tel1 . "-" . $tel2 . "-" . $tel3;
						@endphp
						<label for="inputCompany" class="col-sm-2 col-form-label">Company Tel</label>
						<div class="col-sm-10">{{ $tel }}</div>
					</div>
					<div class="row mb-3">
						<label for="inputCompany" class="col-sm-2 col-form-label">Company Kind</label>
						<div class="col-sm-10">{{ $row->kind }}</div>
					</div>
					<div align="center">
						<a href="{{ route( 'company.edit', $row->id ) }}{{ $tmp }}" class="btn btn-primary">Edit</a>
						<form action="{{ route( 'company.destroy', $row->id ) }}" style="display: inline-block;">
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