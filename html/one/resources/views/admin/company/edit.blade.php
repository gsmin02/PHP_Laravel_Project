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
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">	
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Company Edit</h6>
				<form method="post" action="{{ route('company.update', $row->id) }}{{ $tmp }}">
				@csrf
				@method('PATCH')
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">							
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputCompany" class="col-sm-2 col-form-label">Company name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputCompany" name="name" size="20" maxlength="20" value="{{ $row->name }}">
						</div>
					</div>
					<div class="row mb-3">
						@php
							$tel1 = trim(substr($row->tel,0,3));
							$tel2 = trim(substr($row->tel,3,4));
							$tel3 = trim(substr($row->tel,7,4));
						@endphp
						<label for="inputTel1" class="col-sm-2 col-form-label">Company Tel</label>
						<div class="col-sm-10">
							<div class="input-group">
								<input type="text" class="form-control" id="inputTel1" name="tel1" maxlength="3" placeholder="010" value="{{ $tel1 }}">
								<span class="input-group-text">-</span>
								<input type="text" class="form-control" id="inputTel2" name="tel2" maxlength="4" placeholder="0000" value="{{ $tel2 }}">
								<span class="input-group-text">-</span>
								<input type="text" class="form-control" id="inputTel3" name="tel3" maxlength="4" placeholder="0000" value="{{ $tel3 }}">
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputKind" class="col-sm-2 col-form-label">Company Kind</label>
						<div class="col-sm-10">
							<select name="kind" class="form-select mb-3" id="inputKind">
								<option value="" selected>Open menu</option>
								@for($i = 0; $i < $n_kind; $i++)
									@if($row->kind == $a_kind[$i])
										<option value="{{ $a_kind[$i] }}" selected>{{ $a_kind[$i] }}</option>
									@else
										<option value="{{ $a_kind[$i] }}">{{ $a_kind[$i] }}</option>
									@endif
								@endfor
							</select>
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