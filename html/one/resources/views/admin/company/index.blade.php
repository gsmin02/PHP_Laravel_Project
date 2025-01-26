@extends('admin_layout')
@section('content')
<script>
	function find_text()
	{
		form1.action="{{ route('company.index') }}";
		form1.submit();
	}
</script>
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Company</h6>
				<form name="form1" action="">
					<div class="row table-bar">
						<div class="col-4" align="left">
							<div class="input-group">
								<input class="form-control bg-transparent" type="text" name="text1" onkeydown="if (event.keyCode == 13) { find_text(); }" placeholder="Company name ..">
								<button type="button" class="btn btn-primary" onclick="find_text();">Search</button>
							</div>
						</div>
						<div class="col-8" align="right">
							<a href="{{ route('company.create') }}" class="btn btn-primary ms-2">Add</a>
						</div>
					</div>
				</form>
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">Company Name</th>
							<th scope="col">Company Tel</th>
							<th scope="col">Company Kind</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($list as $row)
						<tr>
							<td scope="row">{{ $row->id }}</td>
							<td><a href="{{ route('company.show', $row->id) }}{{ $tmp }}">{{ $row->name }}</a></td>
							<td scope="row">{{ $row->tel }}</td>
							<td scope="row">{{ $row->kind }}</td>
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