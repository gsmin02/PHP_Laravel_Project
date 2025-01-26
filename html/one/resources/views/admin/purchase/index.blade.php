@extends('admin_layout')
@section('content')
<script>
	function find_text()
	{
		form1.action="{{ route('purchase.index') }}";
		form1.submit();
	}
	window.onload = function() {
      function getTodayDate() {
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
      }

      const tradeDateInput = document.querySelector('input[name="text1"]');
      
	  var text1 = @json(request()->get('text1'));
	  
      if (!text1) {
        tradeDateInput.value = getTodayDate();
      }
    };
</script>
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Purchase</h6>
				<form name="form1" action="">
					<div class="row table-bar">
						<div class="col-4" align="left">
							<div class="input-group">
								<input class="form-control bg-transparent" type="text" name="text1" onkeydown="if (event.keyCode == 13) { find_text(); }" placeholder="Purchase date .." value="{{ request()->get('text1') }}">
								<button type="button" class="btn btn-primary" onclick="find_text();">Search</button>
							</div>
						</div>
						<div class="col-8" align="right">
							<a href="{{ route('purchase.create') }}" class="btn btn-primary ms-2">Add</a>
						</div>
					</div>
				</form>
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Date</th>
							<th scope="col">Name</th>
							<th scope="col">Unit Price</th>
							<th scope="col">Amount</th>
							<th scope="col">Total</th>
							<th scope="col">Company</th>
							<th scope="col">memo</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($list as $row)
						<tr>
							<td scope="row">{{ $row->trade_date }}</td>
							<td><a href="{{ route('purchase.show', $row->id) }}{{ $tmp }}">{{ $row->product_name }}</a></td>
							<td>{{ number_format($row->unit_price) }}</td>
							<td>{{ number_format($row->in_num) }}</td>
							<td>{{ number_format($row->total_price) }}</td>
							<td>Company</td>
							<td>{{ $row->memo }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="row">
					<div class="col">
						{{ $list->links('mypagination') }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Table End -->
@endsection