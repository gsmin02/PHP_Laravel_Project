@extends('layout')
@section('content')
<br><br><br>

<!-- 비디오 재생 소스 -->
<video autoplay loop muted playsinline>
	<source src="{{ asset('storage/video.mp4') }}" type="video/mp4">
	Your browser does not support the video tag.
</video>

<!-- 설명 문구 -->
<div class="inspiration-text-box">
	<h2 class="inspiration-text-en"><b>Enhance Your Space with Style</b></h2>
	<h5 class="inspiration-text-kr">"스타일로 당신의 공간을 더욱 빛나게 하세요."</h5>
</div>

<!-- 스크롤 안내 -->
<div class="container">
	<div class="scroll-indicator">
	  <span class="arrow"></span>
	</div>
	<br><br>
</div>

<div class="inspiration-grid">
	
	@foreach ($concept as $row)
	<a href="{{ route('main.list', $row->id) }}">
		<div class="inspiration-item">
			<img src="{{ asset('storage/product_img/' . $row->picture) }}">
			<div class="inspiration-caption">
				<h2>{{ $row->name }}</h2>
			</div>
		</div>
	</a>
	@endforeach

</div>
@endsection()