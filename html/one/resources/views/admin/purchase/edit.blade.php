@extends('admin_layout')
@section('content')
@if ($errors->any())
	@php
        $topOffset = 50;
		$alertId = 1;
    @endphp
    @foreach ($errors->all() as $message)
		<div class="alert alert-danger alert-dismissible fade show position-fixed m-3" style="top: {{ $topOffset }}px; right: 30px;" role="alert" id="alert-{{ $alertId }}">
			<i class="fa fa-exclamation-circle me-2"></i>
			{{ $message }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		@php
            $topOffset += 65;
			$alertId++;
        @endphp
		<script>
            setTimeout(function() {
                var alert = document.getElementById('alert-{{ $alertId - 1 }}');
                if (alert) {
                    alert.classList.remove('show');
                }
            }, 5000); // 5초 후 사라짐
        </script>
    @endforeach
@endif
<script>
	function select_product()
	{
		var str;
		str = form1.product_name.value;
		if (str=="")
		{
			form1.product_id.value = "";
			form1.unit_price.value = "";
			form1.total_price.value = "";
		}
		else
		{
			str = str.split("^^");
			form1.product_id.value = str[0];
			form1.unit_price.value = str[1];
			form1.total_price.value = Number(form1.unit_price.value) * Number(form1.in_num.value);
		}
	}
	
	function cal_prices()
	{
		form1.total_price.value = Number(form1.unit_price.value) * Number(form1.in_num.value);
		form1.memo.focus();
	}
</script>
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Purchase Edit</h6>
				<form name="form1" method="post" action="{{ route('purchase.update', $row->id) }}{{ $tmp }}">
				@csrf
				@method('PATCH')
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">							
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputName" class="col-sm-2 col-form-label">Trade date</label>
						<div class="col-sm-10">
							<input type="text" name="trade_date" size="20" value="{{ $row->trade_date }}" class="form-control" placeholder="YYYY-MM-DD">
							<!--
							<div class="d-inline-flex">
								<div class="input-group date" id="writeday">
									<div class="input-group-text">
										<div class="input-group-addon">
											<i class="far fa-calendar-alt fa-lg" id="calendar-icon"></i>
										</div>
									</div>
								</div>
							</div>
							-->
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputProduct_name" class="col-sm-2 col-form-label">Product name</label>
						<div class="col-sm-10">
							<input type="hidden" name="product_id" value="{{ $row->product_id }}">
							<select name="product_name" class="form-select mb-3" id="inputProduct_name" onChange="select_product()">
								<option value="" selected>Open menu</option>
								@foreach ($list_product as $row_product)
									<?
									$product_id_price = "$row_product->id^^$row_product->price";
									$product_name_price = "$row_product->name($row_product->price)";
									?>
									@if ($row_product->id == $row->product_id)
										<option value="{{ $product_id_price }}" selected>{{ $product_name_price }}</option>
									@else
										<option value="{{ $product_id_price }}">{{ $product_name_price }}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputUnitPrice" class="col-sm-2 col-form-label">Unit Price</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputUnitPrice" name="unit_price" size="11" maxlength="11" value="{{ $row->unit_price }}" onChange="cal_prices()">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputAmount" class="col-sm-2 col-form-label">Amount</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputAmount" name="in_num" size="11" maxlength="11" value="{{ $row->in_num }}" onChange="cal_prices()">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputTotalPrice" class="col-sm-2 col-form-label">Total Price</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputTotalPrice" name="total_price" size="11" maxlength="11" value="{{ $row->total_price }}">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputMemo" class="col-sm-2 col-form-label">Memo</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputMemo" name="memo" size="100" maxlength="100" value="{{ $row->memo }}">
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
