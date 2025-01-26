<!doctype html>
<html lang="kr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>기능 테스트</title>
	<link href="my/css/bootstrap5-datetimepicker.css" rel="stylesheet">
	<script src="my/js/jquery-3.7.1.min.js"></script>
	<script src="my/js/moment-with-locales.min.js"></script>
	<script src="my/js/bootstrap5-datetimepicker.js"></script>
	<style>
	body {
		background-color: #333;
	}
	.datetimepicker-container {
		position: relative;
		background-color: #fff;
	}
	</style>
</head>
<body>
  <div class="datetimepicker-container">
    <input type="text" id="datePicker" class="form-control">
  </div>
  
  <script>
    $(document).ready(function() {
      $('#datePicker').datetimepicker({
        format: 'YYYY-MM-DD',
        locale: 'ko'
      });
    });
  </script>
</body>
</html>
