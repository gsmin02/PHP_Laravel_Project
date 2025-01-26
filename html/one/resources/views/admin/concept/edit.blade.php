@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Concept Edit</h6>
				<form method="post" action="{{ route('concept.update', $row->id) }}{{ $tmp }}">
				@csrf
				@method('PATCH')
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">{{ $row -> id }}</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputConcept" name="name" size="20" maxlength="20" value="{{ $row -> name }}">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept description</label>
						<div class="col-sm-10">
							<textarea type="text" name="description" class="form-control" style="height: 150px;">{{ $row -> description }}</textarea>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputConcept" class="col-sm-2 col-form-label">Concept picture</label>
						<div class="col-sm-10">
							<input type="file" name="picture" size="20" value="" class="form-control">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<b>file name</b> : {{ $row->picture; }} <br>
								@if($row->picture)
									<img src="{{ asset('/storage/product_img/'.$row->picture) }}" width="80%">
								@else
									<img src="" width="200" height="150">
								@endif
						</div>
					</div>
					<div align="center">
						<input type="submit" class="btn btn-primary" value="Save">
						<input type="button" class="btn btn-secondary" onClick="history.back();" value="Back">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection