@extends('admin_layout')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Gubun Create</h6>
				<form method="post" action="{{ route('gubun.store') }}{{ $tmp }}">
				@csrf
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">							
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputGubun" class="col-sm-2 col-form-label">Gubun name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputGubun" name="name" size="20" maxlength="20" value="{{ old('name') }}">
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