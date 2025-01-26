@extends('admin_layout')
@section('content')
<script>
	function find_text()
	{
		form1.action="{{ route('concept.index') }}";
		form1.submit();
	}
</script>
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Concept</h6>
				<form name="form1" action="">
					<div class="row table-bar">
						<div class="col-4" align="left">
							<div class="input-group">
								<input class="form-control bg-transparent" type="text" name="text1" onkeydown="if (event.keyCode == 13) { find_text(); }" placeholder="Concept name ..">
								<button type="button" class="btn btn-primary" onclick="find_text();">Search</button>
							</div>
						</div>
						<div class="col-8" align="right">
							<a href="{{ route('concept.create') }}" class="btn btn-primary ms-2">Add</a>
						</div>
					</div>
				</form>
				<div class="row">
					@foreach ($list as $row)
						<div class="col-12 col-md-4 h-100">
							<a href="{{ route('concept.show', $row->id) }}{{ $tmp }}">
								<div class="admin-card">
									<div class="admin-card-image-container">
									<img src="{{ asset('/storage/product_img/'.$row->picture) }}" width="100%">
									</div>
									<div class="admin-card-content">
										<p class="admin-card-title" style="color: rgb(0, 105, 168);"><b>{{ $row->name }}</b></p>
									</div>
								</div>
							</a>
						</div>
					@endforeach
				</div>
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