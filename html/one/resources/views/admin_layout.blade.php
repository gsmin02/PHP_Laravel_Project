<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WoodMond - Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('dashmin/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('dashmin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dashmin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('dashmin/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('my/css/css1admin.css') }}" rel="stylesheet">
	<link href="{{ asset('dashmin/css/css1.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ route('admin.index') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>WoodMont</h3>
                </a>
				<!-- 좌측 상단 사용자 상태 표시 -->
                <div class="d-flex align-items-center ms-4 mb-4">
					<!-- 로그인 -->
					@if(session()->get('session_user_id'))
					<div class="position-relative">
						<img class="rounded-circle" width="32" height="32" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-profile-social-media-ui-tanah-basah-glyph-tanah-basah.png">
						<div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
					</div>
					<div class="ms-3">
						<a href="#">
							<h6 class="mb-0">{{ session()->get('session_name') }}</h6>
							<span>{{ session()->get('session_rank') == 2 ? 'Admin' : (session()->get('session_rank') == 1 ? 'Worker' : '') }}</span>
						</a>
					</div>
					@else
					<div class="position-relative">
						<img class="rounded-circle" width="32" height="32" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/48/external-profile-social-media-ui-tanah-basah-basic-outline-tanah-basah.png">
						<div class="bg-dark rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
					</div>
					<div class="ms-3">
						<a href="{{ route('login/admin_login') }}">
							<h6 class="mb-0">Login</h6>
							<span></span>
						</a>
					</div>
					@endif
					<!--
					<div class="ms-3">
                        <h6 class="mb-0">User Name</h6>
                        <span>Admin</span>
                    </div>
					-->
                </div>
				<!-- 좌측 중단 접근 가능 요소 표시 -->
                <div class="navbar-nav w-100">
					<!-- 1st Menu : Ledger -->
					<div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle {{ (request()->is('purchase*') || request()->is('revenue*')) ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Ledger</a>
						<div class="dropdown-menu bg-transparent border-0">
							<!-- Sub Menu : Purchase -->
							<a href="{{ route('purchase.index') }}" class="dropdown-item text-center {{ request()->is('purchase*') ? 'active' : '' }}">Purchase (In)</a>
							<!-- Sub Menu : Revenue -->
							<a href="{{ route('revenue.index') }}" class="dropdown-item text-center {{ request()->is('revenue*') ? 'active' : '' }}">Revenue (Out)</a>
						</div>
					</div>
					<!-- 2nd Menu : Concept -->
					<a href="{{ route('concept.index') }}" class="nav-item nav-link {{ request()->is('concept*') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Concept</a>
					<!-- 3rd Menu : Product -->
                    <a href="{{ route('products.index') }}" class="nav-item nav-link {{ request()->is('product*') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Product</a>
					<!-- 4th Menu : Member -->
                    <a href="{{ route('member.index') }}" class="nav-item nav-link {{ request()->is('member*') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Member</a>
					<!-- 5th Menu : Gubun -->
                    <a href="{{ route('gubun.index') }}" class="nav-item nav-link {{ request()->is('gubun*') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Gubun</a>
					<!-- 6th Menu : Company -->
					<a href="{{ route('company.index') }}" class="nav-item nav-link {{ request()->is('company*') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Company</a>
					<!-- 7th Menu : Chart -->
					<a href="{{ route('chart.index') }}" class="nav-item nav-link {{ request()->is('chart*') ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <!-- 8th Menu : Homepage -->
					<a href="{{ route('main.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Homepage</a>
					<!-- Start Hide Menu
					<!-- Drop Menu : Elements
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="dashmin/button.html" class="dropdown-item">Buttons</a>
                            <a href="dashmin/typography.html" class="dropdown-item">Typography</a>
                            <a href="dashmin/element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
					<!-- Menu : Widgets
                    <a href="dashmin/widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
					<!-- Menu : Forms
                    <a href="dashmin/form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
					<!-- Menu : Tables
                    <a href="dashmin/table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
					<!-- Menu : Charts
                    <a href="dashmin/chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <!-- Drop Menu : Pages
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="dashmin/signin.html" class="dropdown-item">Sign In</a>
                            <a href="dashmin/signup.html" class="dropdown-item">Sign Up</a>
                            <a href="dashmin/404.html" class="dropdown-item">404 Error</a>
                            <a href="dashmin/blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
					End Hide Menu -->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
		<div class="content">
			<!-- Navbar Start -->
			<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
				<a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
					<h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
				</a>
				<a href="#" class="sidebar-toggler flex-shrink-0">
					<i class="fa fa-bars"></i>
				</a>
				<!-- 검색 메뉴 -->
				<!--
				<form class="d-none d-md-flex ms-4">
					<input class="form-control border-0" type="search" placeholder="검색 ..">
				</form>
				-->
				<div class="navbar-nav align-items-center ms-auto">
					<!-- 메세지 드롭다운 -->
					<!--
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
							<i class="fa fa-envelope me-lg-2"></i>
							<span class="d-none d-lg-inline-flex">메세지</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
							<a href="#" class="dropdown-item">
								<div class="d-flex align-items-center">
									<img class="rounded-circle" src="{{ asset('dashmin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
									<div class="ms-2">
										<h6 class="fw-normal mb-0">Jhon send you a message</h6>
										<small>15 minutes ago</small>
									</div>
								</div>
							</a>
							<hr class="dropdown-divider">
							<a href="#" class="dropdown-item">
								<div class="d-flex align-items-center">
									<img class="rounded-circle" src="{{ asset('dashmin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
									<div class="ms-2">
										<h6 class="fw-normal mb-0">Jhon send you a message</h6>
										<small>15 minutes ago</small>
									</div>
								</div>
							</a>
							<hr class="dropdown-divider">
							<a href="#" class="dropdown-item">
								<div class="d-flex align-items-center">
									<img class="rounded-circle" src="{{ asset('dashmin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
									<div class="ms-2">
										<h6 class="fw-normal mb-0">Jhon send you a message</h6>
										<small>15 minutes ago</small>
									</div>
								</div>
							</a>
							<hr class="dropdown-divider">
							<a href="#" class="dropdown-item text-center">See all message</a>
						</div>
					</div>
					-->
					<!-- 알림 드롭다운 -->
					<!--
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
							<i class="fa fa-bell me-lg-2"></i>
							<span class="d-none d-lg-inline-flex">알림</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
							<a href="#" class="dropdown-item">
								<h6 class="fw-normal mb-0">Profile updated</h6>
								<small>15 minutes ago</small>
							</a>
							<hr class="dropdown-divider">
							<a href="#" class="dropdown-item">
								<h6 class="fw-normal mb-0">New user added</h6>
								<small>15 minutes ago</small>
							</a>
							<hr class="dropdown-divider">
							<a href="#" class="dropdown-item">
								<h6 class="fw-normal mb-0">Password changed</h6>
								<small>15 minutes ago</small>
							</a>
							<hr class="dropdown-divider">
							<a href="#" class="dropdown-item text-center">See all notifications</a>
						</div>
					</div>
					-->
					@if(session()->get('session_user_id'))
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
							<img class="rounded-circle me-lg-2" width="32" height="32" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/external-profile-social-media-ui-tanah-basah-glyph-tanah-basah.png">
							<span class="d-none d-lg-inline-flex">{{ session()->get('session_name') }}</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
							<a href="{{ url('login/admin_logout') }}" class="dropdown-item">Log Out</a>
						</div>
					</div>
					@else
					<div class="nav-item">
						<a href="{{ url('login/admin_login') }}" class="nav-link">
							<img class="rounded-circle me-lg-2" width="32" height="32" src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/48/external-profile-social-media-ui-tanah-basah-basic-outline-tanah-basah.png">
							<span class="d-none d-lg-inline-flex">LogIn</span>
						</a>
					</div>
					@endif
				</div>
			</nav>
			<!-- Navbar End -->
		
			@yield('content')
			
			<!-- Footer Start -->
			<!--
			<div class="container-fluid pt-4 px-4">
				<div class="bg-light rounded-top p-4">
					<div class="row">
						<div class="col-12 col-sm-6 text-center text-sm-start">
							&copy; <a href="#">WoodMont</a>, All Right Reserved. 
						</div>
						<div class="col-12 col-sm-6 text-center text-sm-end">
							Designed By <a href="https://htmlcodex.com">HTML Codex</a>
						</br>
						Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
						</div>
					</div>
				</div>
			</div>
			-->
			<!-- Footer End -->
		
		</div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashmin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('dashmin/js/main.js') }}"></script>
</body>

</html>