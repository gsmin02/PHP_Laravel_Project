@extends('admin_layout')
@section('content')
<script>
	function find_text()
	{
		form1.action="{{ route('member.index') }}";
		form1.submit();
	}
</script>
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Member</h6>
				<form name="form1" action="">
					<div class="row table-bar">
						<div class="col-4" align="left">
							<div class="input-group">
								<input class="form-control bg-transparent" type="text" name="text1" onkeydown="if (event.keyCode == 13) { find_text(); }" placeholder="Member name ..">
								<button type="button" class="btn btn-primary" onclick="find_text();">Search</button>
							</div>
						</div>
						<div class="col-8" align="right">
							<a href="{{ route('member.create') }}" class="btn btn-primary ms-2">Add</a>
						</div>
					</div>
				</form>
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">Name</th>
							<th scope="col">User_ID</th>
							<th scope="col">PW</th>
							<th scope="col">Tel</th>
							<th scope="col">Address</th>
							<th scope="col">Rank</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($list as $row)
						@php
							$tel1 = trim(substr($row->tel,0,3));
							$tel2 = trim(substr($row->tel,3,4));
							$tel3 = trim(substr($row->tel,7,4));
							$tel = $tel1 . "-" . $tel2 . "-" . $tel3;
							$row_rank = $row->rank;
							$rank = $row_rank==0 ? 'Member' : ($row_rank==1 ? 'Worker' : ($row_rank==2 ? 'Admin' : 'Error'));
						@endphp
						<tr>
							<td scope="row">{{ $row->id }}</td>
							<td><a href="{{ route('member.show', $row->id) }}{{ $tmp }}">{{ $row->name }}</a></td>
							<td>{{ $row->user_id }}</td>
							<td>{{ $row->pw }}</td>
							<td>{{ $tel }}</td>
							<td>{{ $row->address }}</td>
							<td>{{ $rank }}</td>
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