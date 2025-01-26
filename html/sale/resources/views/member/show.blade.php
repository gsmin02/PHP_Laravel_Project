@extends('main')
@section('content')

<?
	$tel1 = trim(substr($row->tel,0,3));
	$tel2 = trim(substr($row->tel,3,4));
	$tel3 = trim(substr($row->tel,7,4));
	$tel = $tel1 . "-" . $tel2 . "-" . $tel3;
	$rank = $row->rank==0 ? '직원' : '관리자';
?>

<br>
<div class="alert mycolor1" role="alert">사용자</div>

<form name="form1" method="post" action="">

	<table class="table table-sm table-bordered mymargin5">
		<tr>
			<td width="20%" class="mycolor2">번호</td>
			<td width="80%" align="left">{{ $row->id }}</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2"><font color="red">*</font> 이름</td>
			<td width="80%" align="left">{{ $row->name }}</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2"><font color="red">*</font> 아이디</td>
			<td width="80%" align="left">{{ $row->uid }}</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2"><font color="red">*</font> 암호</td>
			<td width="80%" align="left">{{ $row->pwd }}</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2">전화</td>
			<td width="80%" align="left">{{ $tel }}</td>
		</tr>
		<tr>
			<td width="20%" class="mycolor2">등급</td>
			<td width="80%" align="left">{{ $rank }}</td>
		</tr>
		
	</table>

	<div align="center">
		<div class="d-inline-flex">
			<a href="{{ route('member.edit', $row->id)}}{{ $tmp }}" class="btn btn-sm mycolor1">수정</a> &nbsp;
			
			<form action="{{ route('member.destroy', $row->id)}}">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요 ?');">삭제</button> &nbsp;
			</form>
			<input type="button" value="이전화면" class="btn btn-sm mycolor1" onClick="history.back();">
		</div>
	</div>
</form>
<!-------------------------------------------------------------->
<!-- 끝 : Content                                                                     -->
<!-------------------------------------------------------------->
</div>

@endsection
