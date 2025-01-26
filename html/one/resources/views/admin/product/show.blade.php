@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<form name="form1" method="post" action="">
				<div class="bg-light rounded h-100 p-4">
					<h6 class="mb-4">Product</h6>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">{{ $row->id }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Gubun Id</label>
						<div class="col-sm-10">{{ $row->gubuns_name }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Concept Id</label>
						<div class="col-sm-10">{{ $row->concepts_name }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Product name</label>
						<div class="col-sm-10">{{ $row->name }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Product price</label>
						<div class="col-sm-10">{{ $row->price }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Product Stock</label>
						<div class="col-sm-10">{{ $row->stock }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Product description</label>
						<div class="col-sm-10">{{ $row->description }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Product picture</label>
						<div class="col-sm-10"><b>{{ $row->pic }}</b><br><img src="{{ asset('/storage/product_img/thumb/'.$row->pic) }}" width="80%" class="admin-img"></div>
					</div>
					<div align="center">
						<a href="{{ route( 'products.edit', $row->id ) }}{{ $tmp }}" class="btn btn-primary">Edit</a>
						<form action="{{ route( 'products.destroy', $row->id ) }}" style="display: inline-block;">
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