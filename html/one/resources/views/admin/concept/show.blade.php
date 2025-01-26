@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<form name="form1" method="post" action="">
				<div class="bg-light rounded h-100 p-4">
					<h6 class="mb-4">Concept</h6>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">{{ $row->id }}</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept name</label>
						<div class="col-sm-10">{{ $row->name }}</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept description</label>
						<div class="col-sm-10">{{ $row->description }}</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept picture</label>
						<div class="col-sm-10"><b>{{ $row->picture }}</b><br><img src="{{ asset('/storage/product_img/thumb/'.$row->picture) }}" width="80%" class="admin-img"></div>
					</div>
					<div align="center">
						<a href="{{ route( 'concept.edit', $row->id ) }}{{ $tmp }}" class="btn btn-primary">Edit</a>
						<form action="{{ route( 'concept.destroy', $row->id ) }}" style="display: inline-block;">
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