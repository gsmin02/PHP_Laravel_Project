@extends('layout')
@section('content')
<div class="detail-grid pdd-top">
	<div class="detail-item">
		<img src="{{ asset('storage/product_img/' . $detail->pic) }}">
	</div>
	<form method="post" action="{{ route('revenue.store') }}">
		@csrf
		<input type="hidden" name="check" value="1">
		<input type="hidden" name="trade_date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
		<input type="hidden" name="product_id" value="{{ $detail->id }}">
		<input type="hidden" name="unit_price" value="{{ $detail->price }}">
		<input type="hidden" name="out_num" value="1">
		<input type="hidden" name="total_price" value="{{ $detail->price }}">
		<input type="hidden" name="memo" value="memberid_{{ session()->get('session_id') }}">
		<div class="detail-item">
			<div class="detail-caption">
				<h2><b>{{ $detail->name }}</b></h2>
				<p class="detail-caption-text">{{ $detail->description }}</p>
				@if(!session()->exists("session_user_id"))
				<a href="#"><div class="detail-button" data-bs-toggle='modal' data-bs-target='#LoginModal' ><b>BUY</b></div></a>
				@else
				<button type="submit" class="detail-button"><b>BUY</b></button>
				@endif
				<div class="detail-show-price">{{ number_format($detail->price) }} Won</div>
			</div>
		</div>
	</form>
</div>
@endsection()