@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<form name="form1" method="post" action="">
				<div class="bg-light rounded h-100 p-4">
					<h6 class="mb-4">Purchase</h6>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">{{ $row->id }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Trade Date</label>
						<div class="col-sm-10">{{ $row->trade_date }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Product name</label>
						<div class="col-sm-10">{{ $row->product_name }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Unit Price</label>
						<div class="col-sm-10">{{ number_format($row->unit_price) }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Amount</label>
						<div class="col-sm-10">{{ number_format($row->in_num) }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Total Price</label>
						<div class="col-sm-10">{{ number_format($row->total_price) }}</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Memo</label>
						<div class="col-sm-10">{{ $row->memo }}</div>
					</div>
					
					<div align="center">
						<a href="{{ route( 'purchase.edit', $row->id ) }}{{ $tmp }}" class="btn btn-primary">Edit</a>
						<form action="{{ route( 'purchase.destroy', $row->id ) }}" style="display: inline-block;">
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