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
				<h6 class="mb-4">Member Create</h6>
				<form method="post" action="{{ route('member.store') }}{{ $tmp }}">
				@csrf
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Id</label>
						<div class="col-sm-10">							
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputName" class="col-sm-2 col-form-label">Member name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputName" name="name" size="20" maxlength="20" value="{{ old('name') }}" placeholder="Your Name ..">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputID" class="col-sm-2 col-form-label">Member ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputID" name="user_id" size="20" maxlength="20" value="{{ old('name') }}" placeholder="Your Id ..">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPW" class="col-sm-2 col-form-label">Member Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPW" name="pw" size="20" maxlength="20" value="{{ old('name') }}" placeholder="Your Password ..">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputTel1" class="col-sm-2 col-form-label">Member Tel</label>
						<div class="col-sm-10">
							<div class="input-group">
								<input type="text" class="form-control" id="inputTel1" name="tel1" maxlength="3" placeholder="010">
								<span class="input-group-text">-</span>
								<input type="text" class="form-control" id="inputTel2" name="tel2" maxlength="4" placeholder="0000">
								<span class="input-group-text">-</span>
								<input type="text" class="form-control" id="inputTel3" name="tel3" maxlength="4" placeholder="0000">
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputAddress" class="col-sm-2 col-form-label">Member Address</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputAddress" name="address" size="100" maxlength="100" value="{{ old('name') }}" placeholder="Your Address ..">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputRank1" class="col-sm-2 col-form-label">Member Rank</label>
						<div class="col-sm-10">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="rank" id="gridRadios1" value="0" checked>
								<label class="form-check-label" for="gridRadios1">Member</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="rank" id="gridRadios2" value="1">
								<label class="form-check-label" for="gridRadios2">Worker</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="rank" id="gridRadios3" value="2">
								<label class="form-check-label" for="gridRadios3">Admin</label>
							</div>
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