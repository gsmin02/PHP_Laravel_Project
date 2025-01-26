@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Product Edit</h6>
				<form method="post" action="{{ route('products.update', $row->id) }}{{ $tmp }}">
				@csrf
				@method('PATCH')
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">{{ $row -> id }}</div>
					</div>
					<div class="row mb-3">
						<label for="inputgubuns_id" class="col-sm-2 col-form-label">Gubun Id</label>
						<div class="col-sm-10">
							<select name="gubuns_id" class="form-select mb-3" id="inputgubuns_id">
								<option value="" selected>Open menu</option>
								@foreach ($list_gubun as $row_gubun)
									@if ($row_gubun->id == $row->gubun_id)
										<option value="{{ $row_gubun->id }}" selected>{{ $row_gubun->name }}</option>
									@else
										<option value="{{ $row_gubun->id }}">{{ $row_gubun->name }}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputconcepts_id" class="col-sm-2 col-form-label">Concept Id</label>
						<div class="col-sm-10">
							<select name="concepts_id" class="form-select mb-3" id="inputconcepts_id">
								<option value="" selected>Open menu</option>
								@foreach ($list_concept as $row_concept)
									@if ($row_concept->id == $row->concept_id)
										<option value="{{ $row_concept->id }}" selected>{{ $row_concept->name }}</option>
									@else
										<option value="{{ $row_concept->id }}">{{ $row_concept->name }}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputProduct" class="col-sm-2 col-form-label">Product name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputProduct" name="name" size="20" maxlength="20" value="{{ $row -> name }}">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPrice" class="col-sm-2 col-form-label">Product price</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputPrice" name="price" size="11" maxlength="11" value="{{ $row -> price }}">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputStock" class="col-sm-2 col-form-label">Product stock</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputStock" name="stock" size="11" maxlength="11" value="{{ $row -> stock }}">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputDescription" class="col-sm-2 col-form-label">Product description</label>
						<div class="col-sm-10">
							<textarea type="text" name="description" class="form-control" style="height: 150px;">{{ $row -> description }}</textarea>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputProduct" class="col-sm-2 col-form-label">Product picture</label>
						<div class="col-sm-10">
							<input type="file" name="pic" size="20" value="" class="form-control">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-sm-2"></div>
						<div class="col-sm-10">
							<b>file name</b> : {{ $row->pic; }} <br>
								@if($row->pic)
									<img src="{{ asset('/storage/product_img/'.$row->pic) }}" width="80%">
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