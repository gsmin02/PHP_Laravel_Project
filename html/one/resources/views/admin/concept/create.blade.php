@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Concept Create</h6>
				<form name="form1" method="post" action="{{ route('concept.store') }}{{ $tmp }}" enctype="multipart/form-data">
				@csrf
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">							
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputConcept" name="name" value="{{ old('name') }}">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept Description</label>
						<div class="col-sm-10">
							<textarea type="text" name="description" class="form-control" style="height: 150px;">{{ old('description') }}</textarea>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept Picture</label>
						<div class="col-sm-10">
							<input type="file" name="picture" size="20" value="" class="form-control">
						</div>
					</div>
					<div align="center">
						<input type="submit" class="btn btn-primary" value="Create">
						<input type="button" class="btn btn-secondary" onClick="history.back();" value="Back">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection