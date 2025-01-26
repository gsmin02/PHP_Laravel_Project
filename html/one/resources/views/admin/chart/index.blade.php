@extends('admin_layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	function find_text()
	{
		form1.action="{{ route('chart.index') }}";
		form1.submit();
	}
	window.onload = function() {
      function getTodayDate() {
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
      }
	  function getPreDate() {
        const today = new Date();
        const year = today.getFullYear();
        const month = String(today.getMonth() + 0).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
      }

      const tradeDateInput = document.querySelector('input[name="text1"]');
	  const tradeDateInput2 = document.querySelector('input[name="text2"]');
      
	  var text1 = @json(request()->get('text1'));
	  var text2 = @json(request()->get('text2'));
	  
      if (!text1) {
        tradeDateInput.value = getPreDate();
      }
	  if(!text2) {
		tradeDateInput2.value = getTodayDate();
	  }
    };
	$(function() {
		$("#text1").datetimepicker({
			locale: "ko",
			format: "YYYY-MM-DD",
			defaultDate: moment()
		});
		$("#text2").datetimepicker({
			locale: "ko",
			format: "YYYY-MM-DD",
			defaultDate: moment()
		});
		
		$("#text1").on("dp.change.datetimepicker", function (e) {
			find_text();
		});
		$("#text2").on("dp.change.datetimepicker", function (e) {
			find_text();
		});
		
	});
</script>
<script src="{{ asset('my/js/chart.min.js') }}"></script>
<!-- Chart Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Charts</h6>
				<form name="form1" action="">
					<div class="row table-bar">
						<div class="col-4" align="left">
							<div class="input-group">
								<input class="form-control" type="text" name="text1" onkeydown="if (event.keyCode == 13) { find_text(); }" value="{{ request()->get('text1') }}">
								<p class="px-2">-</p>
								<input class="form-control" type="text" name="text2" onkeydown="if (event.keyCode == 13) { find_text(); }" value="{{ request()->get('text2') }}">
								<button type="button" class="btn btn-primary" onclick="find_text();">Search</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Polar Area Chart</h6>
				<canvas id="myChart1"></canvas>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Doughnut Chart</h6>
				<canvas id="myChart2"></canvas>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Single Line Chart</h6>
				<canvas id="myChart3"></canvas>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="bg-light rounded h-100 p-4">
				<h6 class="mb-4">Multiple Bar Chart</h6>
				<canvas id="myChart4"></canvas>
			</div>
		</div>
	</div>
</div>

<script>
	const ctx1 = document.getElementById('myChart1');
	const myChart1 = new Chart(ctx1, {
		type: 'polarArea', // doughnut, line, bar, pie, polarArea
		data: {
			labels: [ <?=$str_label; ?> ],
			datasets: [{
				data: [ <?=$str_data; ?> ],
				backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					'rgba(75, 192, 192, 0.5)',
					'rgba(255, 205, 86, 0.5)',
					'rgba(201, 203, 207, 0.5)',
					'rgba(54, 162, 235, 0.5)'
				],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(255, 205, 86, 1)',
					'rgba(201, 203, 207, 1)',
					'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				r: {
					ticks: {
						backdropColor: 'rgba(0, 0, 0, 0)'
					}
				}
			}
		}
	});
	
	const ctx2 = document.getElementById('myChart2');
	const myChart2 = new Chart(ctx2, {
		type: 'doughnut', // doughnut, line, bar, pie, polarArea
		data: {
			labels: [ <?=$str_label; ?> ],
			datasets: [{
				data: [ <?=$str_data; ?> ],
				backgroundColor: [
					"rgba(123, 204, 196, 0.5)",  // 파스텔 민트
					"rgba(103, 58, 183, 0.5)",   // 보라색
					"rgba(255, 87, 34, 0.5)",    // 주황색
					"rgba(33, 150, 243, 0.5)",   // 파란색
					"rgba(156, 39, 176, 0.5)",   // 보라색 (조금 더 진한 톤)
					"rgba(0, 150, 136, 0.5)",    // 청록색
					"rgba(255, 193, 7, 0.5)"     // 노란색
				],
				borderColor: [
					"rgb(123, 204, 196)",  // 파스텔 민트
					"rgb(103, 58, 183)",   // 보라색
					"rgb(255, 87, 34)",    // 주황색
					"rgb(33, 150, 243)",   // 파란색
					"rgb(156, 39, 176)",   // 보라색 (조금 더 진한 톤)
					"rgb(0, 150, 136)",    // 청록색
					"rgb(255, 193, 7)"     // 노란색
				],
				borderWidth: 1
			}]
		}
	});
	
	
	
	const ctx3 = document.getElementById('myChart3');
	const myChart3 = new Chart(ctx3, {
		type: 'line', // doughnut, line, bar, pie, polarArea
		data: {
			labels: [ <?=$str_label; ?> ],
			datasets: [{
				label: 'Line Chart', // Chart name
				data: [ <?=$str_data; ?> ],
				fill: false,
				borderColor: 'rgb(75, 192, 192)',
				tension: 0.2
			}]
		}
	});
	
	const ctx4 = document.getElementById('myChart4');
	const myChart4 = new Chart(ctx4, {
		type: 'bar', // doughnut, line, bar, pie, polarArea
		data: {
			labels: [ <?=$str_label; ?> ],
			datasets: [{
				label: 'Bar Chart', // Chart name
				data: [ <?=$str_data; ?> ],
				backgroundColor: [
					"rgba(248, 203, 73, 0.5)",   // 골드
					"rgba(63, 81, 181, 0.5)",    // 인디고 블루
					"rgba(0, 188, 212, 0.5)",    // 청록색
					"rgba(255, 64, 129, 0.5)",   // 핑크색
					"rgba(139, 195, 74, 0.5)",   // 라임 그린
					"rgba(255, 152, 0, 0.5)",    // 오렌지색
					"rgba(233, 30, 99, 0.5)"     // 핫핑크
				],
				borderColor: [
					"rgb(248, 203, 73)",   // 골드
					"rgb(63, 81, 181)",    // 인디고 블루
					"rgb(0, 188, 212)",    // 청록색
					"rgb(255, 64, 129)",   // 핑크색
					"rgb(139, 195, 74)",   // 라임 그린
					"rgb(255, 152, 0)",    // 오렌지색
					"rgb(233, 30, 99)"     // 핫핑크
				],
				borderWidth: 1
			}]
		}
	});
</script>
<!-- Chart End -->
@endsection