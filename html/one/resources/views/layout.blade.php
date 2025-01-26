<!doctype html>
<html lang="kr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WoodMont</title>
    <link href="{{ asset('my/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('my/css/my.css') }}" rel="stylesheet">
    <link href="{{ asset('my/css/css1.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="{{ asset('my/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('my/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
	<script>
		function find_text()
		{
			form2.action="{{ route('main.list', 0) }}";
			form2.submit();
		}
	</script>
	<!-- 페이지 로딩 시 표시되는 이미지 -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
		</div>
	</div>
    <button class="menu-toggle" id="menuToggle">☰</button>
    <header id="mainHeader">
		<div class="row">
			<div class="container">
				<h1><a href="{{ route('main.index') }}"><b class="link-main">WoodMont</b></a></h1>
					<form name="form2" action="">
						<div class="ml-auto me-md-4 icon_layout">
							<span class="col-3">
								<input type="text" name="text1" value="" class="input_search_control" onKeydown="if (event.keyCode == 13) { find_text(); }" placeholder="Search.."> 
							</span>
							<span style="margin-left: 10px;">
								<button onClick="find_text();" class="search-button">
									<img width="32" height="32" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1"/>
								</button>
							</span>
							<span style="margin-left: 10px;" class="d-inline-flex">
								@if(!session()->exists("session_user_id"))
								<a href="" data-bs-toggle='modal' data-bs-target='#LoginModal'>
									<img width="32" height="32" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/48/external-profile-social-media-ui-tanah-basah-basic-outline-tanah-basah.png" alt="external-profile-social-media-ui-tanah-basah-basic-outline-tanah-basah"/>
								</a>
								@else
								<div class="nav-item dropdown">
									<a href="#" class="nav-link" data-bs-toggle="dropdown">
										<img class="rounded-circle me-lg-2" width="32" height="32" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-profile-social-media-ui-tanah-basah-glyph-tanah-basah.png">
									</a>
									<div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
										<a href="{{ url('login/logout') }}" class="dropdown-item">Log Out</a>
										@if(session()->get("session_rank")==2)
										<a href="{{ route('admin.index') }}" class="dropdown-item">Admin</a>
										@endif
									</div>
								</div>
								@endif
								
							</span>
						</div>
					</form>
				<nav id="mainNav" class="ml-auto mr-auto">
					<?
						use App\Models\One_Gubun;
						// use App\Models\One_Concept;
						
						$filter_gubun = One_Gubun::select('id', 'name')->get();
						// $filter_concept = One_Concept::select('id', 'name')->get();
					?>
					<ul class="layout-item-list">
					<li>&nbsp;</li>
					</ul>
					<ul class="layout-item-list">
						<!-- 구분 목록 -->
						<li class="list-menu"><h4>제품 구분</h4></li>
						@foreach ($filter_gubun as $filter_row)
						<li><a href="{{ route('main.category', $filter_row->id) }}">{{ $filter_row->name }}</a></li>
						@endforeach
					</ul>
					<!-- 컨셉 목록
					<ul class="layout-item-list">
						<li class="list-menu"><h4>제품 컨셉</h4></li>
						<li><a href="{ route('main.list', 0) }}">All</a></li>
						foreach ($filter_concept as $filter_row)
						<li><a href="{ route('main.list', $filter_row->id) }}">{ $filter_row->name }}</a></li>
						endforeach
					</ul>
					-->
				</nav>
				
			</div>
			<div class="compact-header">
				<div class="hamburger-menu">
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
    </header>

    <main class="container">
		<!-- 내용 표시 -->
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 WoodMont. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('my/js/js1.js') }}"></script>

	<!-- Modal -->
	<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content bg-white shadow-lg border-0 rounded-3">
		
		  <div class="modal-header border-0">
			<h4 class="modal-title text-dark text-font-en" id="LoginModalLabel"><b>LogIn</b></h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <form name="form_login" method="post" action="{{ url('login/check') }}">
		  @csrf
			  <div class="modal-body p-4">
				  <div class="mb-3 text-font-en">
					<label for="uid" class="form-label text-muted"><b>ID</b></label>
					<input type="text" id="uid" name="user_id" class="form-control border-light shadow-sm" placeholder="admin" value="admin">
				  </div>
				  <div class="mb-3 text-font-en">
					<label for="pwd" class="form-label text-muted"><b>Password</b></label>
					<input type="password" id="pwd" name="pw" class="form-control border-light shadow-sm" placeholder="1234" value="1234">
				  </div>
			  </div>
			  <div class="modal-footer border-0 justify-content-center">
				<button type="submit" class="btn btn-secondary w-100">Login</button>
				<a type="button"  class="btn btn-light w-100" data-bs-toggle='modal' data-bs-target='#signupModal'>SignUp</a>
				<button type="button" class="btn btn-outline-secondary w-100" data-bs-dismiss="modal">Close</button>
			  </div>
		  </form>
		</div>
	  </div>
	</div>
	
	<!-- SignUp Modal -->
	<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content bg-white shadow-lg border-0 rounded-3">
		
		  <div class="modal-header border-0">
			<h4 class="modal-title text-dark text-font-en" id="signupModalLabel"><b>SignUp</b></h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <form name="form_signup" method="post" action="{{ route('member.store') }}">
		  @csrf
			<input type="hidden" name="check" value="0">
			<input type="hidden" name="rank" value="0">
			  <div class="modal-body p-4">
			  
				  <div class="mb-3 text-font-en">
					<label for="uid" class="form-label text-muted"><b>ID</b></label>
					<input type="text" id="uid" name="user_id" class="form-control border-light shadow-sm">
				  </div>
				  
				  <div class="mb-3 text-font-en">
					<label for="uid" class="form-label text-muted"><b>Password</b></label>
					<input type="password" id="pwd" name="pw" class="form-control border-light shadow-sm">
				  </div>
				  
				  <div class="mb-3 text-font-en">
					<label for="name" class="form-label text-muted"><b>Name</b></label>
					<input type="text" id="name" name="name" class="form-control border-light shadow-sm">
				  </div>
				  
				  <div class="mb-3 text-font-en">
					<label for="tel1" class="form-label text-muted"><b>Tel</b></label>
					<div class="input-group">
						<input type="text" class="form-control border-light shadow-sm" id="inputTel1" name="tel1" maxlength="3" placeholder="010">
						<span class="input-group-text">-</span>
						<input type="text" class="form-control border-light shadow-sm" id="inputTel2" name="tel2" maxlength="4" placeholder="0000">
						<span class="input-group-text">-</span>
						<input type="text" class="form-control border-light shadow-sm" id="inputTel3" name="tel3" maxlength="4" placeholder="0000">
					</div>
				  </div>
				  
				  <div class="mb-3 text-font-en">
					<label for="address" class="form-label text-muted"><b>Address</b></label>
					<input type="text" id="address" name="address" class="form-control border-light shadow-sm">
				  </div>
			  </div>
			  
			  <div class="modal-footer border-0 justify-content-center">
				<button type="submit" class="btn btn-secondary w-100">SignUp</button>
				<button type="button" class="btn btn-outline-secondary w-100" data-bs-dismiss="modal">Close</button>
			  </div>
		  </form>
		</div>
	  </div>
	</div>
</body>
</html>