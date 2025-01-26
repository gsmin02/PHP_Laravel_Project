@extends('main')
@section('content')
<br>
<div class="alert mycolor1" role="alert">사용자</div>

<form name="form1" method="post" action="{{ route('worker.update', $row->id) }}{{ $tmp }}">
@csrf
@method('PATCH')

<table class="table table-sm table-bordered mymargin5">
<tr>
	<td width="20%" class="mycolor2">번호</td>
	<td width="80%" align="left">{{ $row -> id }}</td>
</tr>
<tr>
	<td width="20%" class="mycolor2"><font color="red">*</font> 이름</td>
	<td width="80%" align="left">
		<div class="d-inline-flex">
			<input type="text" name="name" size="20" maxlength="20" value="{{ $row -> name }}" class="form-control form-control-sm">
		</div>
		<br>
		@error('name') {{ $message }} @enderror
	</td>
</tr>
<?
	$tel1 = trim(substr($row->phone,0,3));
	$tel2 = trim(substr($row->phone,3,4));
	$tel3 = trim(substr($row->phone,7,4));
?>
<tr>
	<td width="20%" class="mycolor2"><font color="red">*</font> 전화</div></td>
	<td width="80%" align="left">
		<div class="d-inline-flex">
			<input type="text" name="tel1" size="3" maxlength="3" value="{{ $tel1 }}" class="form-control form-control-sm">-
			<input type="text" name="tel2" size="4" maxlength="4" value="{{ $tel2 }}" class="form-control form-control-sm">-
			<input type="text" name="tel3" size="4" maxlength="4" value="{{ $tel3 }}" class="form-control form-control-sm">
		</div>
		<br>
		@error('tel1') {{ $message }} @enderror
		@error('tel2') {{ $message }} @enderror
		@error('tel3') {{ $message }} @enderror
	</td>
</tr>
<tr>
	<td width="20%" class="mycolor2"><font color="red">*</font> 성별</td>
	<td width="80%" align="left">
		<div class="d-inline-flex">
		@if($row->gender=="남자")
			<input type="radio" name="gender" value="남자" checked>&nbsp;남자&nbsp;&nbsp;
			<input type="radio" name="gender" value="여자">&nbsp;여자
		@else
			<input type="radio" name="gender" value="남자">&nbsp;남자&nbsp;&nbsp;
			<input type="radio" name="gender" value="여자" checked>&nbsp;여자
		@endif
		</div>
		<br>
		@error('gender') {{ $message }} @enderror
	</td>
</tr>
</table>

<div align="center">
<input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
<input type="button" value="이전화면" class="btn btn-sm mycolor1" onClick="history.back();">
</div>

</form>
@endsection
