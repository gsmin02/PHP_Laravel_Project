@extends('layout')
@section('content')

<div class="inspiration-text-box pdd-top">
	<h2 class="inspiration-text-en"><b>{{ ($concept != null) ? $concept->name : "All Items" }}</b></h2>
	<h5 class="inspiration-text-en list-text-align">{{ ($concept != null) ? $concept->description : '' }}</h5>
</div>
<!-- 스크롤 안내 -->
<div class="container">
	<div class="scroll-indicator">
	  <span class="arrow"></span>
	</div>
</div>

<div class="list-grid">

	@foreach ($list as $row)
	<a href="{{ route('main.detail', $row->id) }}">
		<div class="list-item">
			<img src="{{ asset('storage/product_img/' . $row->pic) }}">
			<div class="list-caption">
				<h3>{{ $row->name }}</h3>
			</div>
		</div>
	</a>
	@endforeach

	<!--
	<a href="{ route('detail.index') }}">
		<div class="list-item">
			<img src="{{ asset('storage/product_img/list_img1.jpg') }}" alt="Living Room">
			<div class="list-caption">
				<h3>Elegant Dining Room</h3>
			</div>
		</div>
	</a>
	
	<a href="{ route('detail.index') }}">
		<div class="list-item">
			<img src="{{ asset('storage/product_img/list_img2.jpg') }}" alt="Bedroom">
			<div class="list-caption">
				<h3>Modern Living Room</h3>
			</div>
		</div>
	</a>
	
	<a href="{ route('detail.index') }}">
		<div class="list-item">
			<img src="{{ asset('storage/product_img/list_img5.jpg') }}" alt="Home Office">
			<div class="list-caption">
				<h3>Cozy Bedroom</h3>
			</div>
		</div>
	</a>

	<a href="{ route('detail.index') }}">
		<div class="list-item">
			<img src="{{ asset('storage/product_img/list_img6.jpg') }}" alt="Dining Room">
			<div class="list-caption">
				<h3>Serene Patio</h3>
			</div>
		</div>
	</a>

	<a href="{ route('detail.index') }}">
		<div class="list-item">
			<img src="{{ asset('storage/product_img/list_img3.jpg') }}" alt="Kitchen">
			<div class="list-caption">
				<h3>Productive Home Office</h3>
			</div>
		</div>
	</a>

	<a href="{ route('detail.index') }}">
		<div class="list-item">
			<img src="{{ asset('storage/product_img/list_img4.jpg') }}" alt="Outdoor">
			<div class="list-caption">
				<h3>Minimalist Kitchen</h3>
			</div>
		</div>
	</a>
	-->
	
</div>
@endsection