@extends('main')
@section('content')

<br>
<div class="alert mycolor1" role="alert">제품사진</div>

<script>
	function find_text()
	{
		form1.action="{{ route('picture.index') }}";
		form1.submit();
	}

	
</script>

<form name="form1" action="">
<div class="row">
	<div class="col-6" align="left">
		<div class="input-group input-group-sm">
			<div class="input-group-prepend">
				<span class="input-group-text">이름</span>
			</div>
			<input type="text" name="text1" value="{{ $text1 }}" class="form-control" onKeydown="if (event.keyCode == 13) { find_text(); }" placeholder="찾을 이름은 ?"> 
			<span class="input-group-append">
				<button class="btn mycolor1" type="button" onClick="find_text();">검색</button>
			</span>
		</div>
	</div>
	<div class="col-6" align="right">
	</div>
</div>
</form>

<div class="row">
	@foreach ($list as $row)
	<?
		$iname = $row->pic ? $row->pic : "";
		$pname = $row->name;
	?>
	<div class="col-3">
		<div class="mythumb_box">
			<img src="{{ asset('/storage/product_img/thumb/'.$iname) }}" class="mythumb_image rounded"
				style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#zoomModal"
				onclick="document.getElementById('zoomModalLabel').innerText='{{ $pname }}';
				picname.src='{{ asset('/storage/product_img/'.$iname) }}'">
			<div class="my-bg-2 mythumb_text rounded">{{ $pname }}</div>
		</div>
	</div>
	@endforeach
</div>

<div class="row">
	<div class="col">
		{{ $list->links('mypagination') }}
	</div>
</div>

<!-- Zoom Modal 이미지 -->
<div class="modal fade" id="zoomModal" tabindex="-1" aria-labelledby="zoomModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="zoomModalLabel">상품명1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" align="center">
        <img src="#" name="picname" class="img-fluid img-thumbnail" style="cursor:pointer" data-bs-dismiss="modal">
      </div>
    </div>
  </div>
</div>

@endsection