@extends('main')
@section('content')
<br>
<div class="alert mycolor1" role="alert">Test</div>

<form name="form1" method="post" action="{{ route('co.store') }}{{ $tmp }}">
@csrf

<table class="table table-sm table-bordered mymargin5">
<tr>
	<td width="20%" class="mycolor2">번호</td>
	<td width="80%" align="left"></td>
</tr>
<tr>
	<td width="20%" class="mycolor2"><font color="red">*</font> 회사명</td>
	<td width="80%" align="left">
		<div class="d-inline-flex">
			<input type="text" name="coname" size="20" maxlength="20" value="{{ old('coname') }}" class="form-control form-control-sm">
		</div>
		<br>
		@error('coname') {{ $message }} @enderror
	</td>
</tr>
<tr>
	<td width="20%" class="mycolor2"><font color="red">*</font> 회사전화</div></td>
	<td width="80%" align="left">
		<div class="d-inline-flex">
			<input type="text" name="cotel1" size="3" maxlength="3" value="{{ old('cotel1') }}" class="form-control form-control-sm">-
			<input type="text" name="cotel2" size="4" maxlength="4" value="{{ old('cotel2') }}" class="form-control form-control-sm">-
			<input type="text" name="cotel3" size="4" maxlength="4" value="{{ old('cotel3') }}" class="form-control form-control-sm">
		</div>
		<br>
		@error('cotel1') {{ $message }} @enderror
		@error('cotel2') {{ $message }} @enderror
		@error('cotel3') {{ $message }} @enderror
	</td>
</tr>
<tr>
	<td width="20%" class="mycolor2"><font color="red">*</font> 회사분류</td>
	<td width="80%" align="left">
		<div class="d-inline-flex">
			<select name="cokind" class="form-select form-select-sm">
				<option value="" selected>선택하세요.</option>
				@for($i = 0; $i < $n_cokind; $i++)
					<option value="{{ $a_cokind[$i] }}">{{ $a_cokind[$i] }}</option>
				@endfor
				
			</select>
		</div>
		<br>
		@error('cokind') {{ $message }} @enderror
	</td>
</tr>
</table>

<div align="center">
<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
<input type="button" value="이전화면" class="btn btn-sm mycolor1" onClick="history.back();">
</div>

</form>
@endsection
