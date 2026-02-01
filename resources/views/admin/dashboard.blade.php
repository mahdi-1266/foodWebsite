<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapget.com/demos/medflex-medical-admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Nov 2025 19:24:25 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap Gallery - Medical Admin Templates & Dashboards</title>

	<!-- Meta -->
	<meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:title" content="Admin Templates - Dashboard Templates">
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<link rel="shortcut icon" href="{{ asset('back-end/assets/images/favicon.svg'); }}">


	<!-- *************
	************ CSS Files *************
************* -->
	<link rel="stylesheet" href="{{ asset('back-end/assets/fonts/remix/remixicon.css'); }}">
	<link rel="stylesheet" href="{{ asset('back-end/assets/css/main.min.css'); }}">
	<link rel="stylesheet" href="{{ asset('back-end/assets/css/style.css'); }}">

	<!-- *************
	************ Vendor Css Files *************
************ -->

	<!-- Scrollbar CSS -->
	<link rel="stylesheet" href="{{ asset('back-end/assets/vendor/overlay-scroll/OverlayScrollbars.min.css'); }}">
</head>

<body>

	<!-- Loading starts -->
	<div id="loading-wrapper">
		<div class='spin-wrapper'>
			<div class='spin'>
				<div class='inner'></div>
			</div>
			<div class='spin'>
				<div class='inner'></div>
			</div>
			<div class='spin'>
				<div class='inner'></div>
			</div>
			<div class='spin'>
				<div class='inner'></div>
			</div>
			<div class='spin'>
				<div class='inner'></div>
			</div>
			<div class='spin'>
				<div class='inner'></div>
			</div>
		</div>
	</div>
	<!-- Loading ends -->

	<!-- Page wrapper starts -->
	<div class="page-wrapper">

		<!-- App header starts -->
		@include('admin.body.header')
		<!-- App header ends -->

		<!-- Main container starts -->
		<div class="main-container">

			<!-- Sidebar wrapper starts -->
			@include('admin.body.sidebar')
			<!-- Sidebar wrapper ends -->

			<!-- App container starts -->
			<div class="app-container">

				<!-- App hero header starts -->
				<div class="app-hero-header d-flex align-items-center">

					<!-- Breadcrumb starts -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
							<a href="index-2.html">Home</a>
						</li>
						<li class="breadcrumb-item text-primary" aria-current="page">
							Dashboard
						</li>
					</ol>
					<!-- Breadcrumb ends -->

				</div>
				<!-- App Hero header ends -->

				<!-- App body starts -->
				@yield('dashboard-body')
				<!-- App body ends -->

				<!-- App footer starts -->
				@include('admin.body.footer')
				<!-- App footer ends -->

			</div>
			<!-- App container ends -->

		</div>
		<!-- Main container ends -->

	</div>
	<!-- Page wrapper ends -->

	<!-- *************
		************ JavaScript Files *************
	************* -->
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="{{ asset('back-end/assets/js/jquery.min.js'); }}"></script>
	<script src="{{ asset('back-end/assets/js/bootstrap.bundle.min.js'); }}"></script>
	<script src="{{ asset('back-end/assets/js/moment.min.js'); }}"></script>

	<!-- *************
		************ Vendor Js Files *************
************* -->


	<!-- Overlay Scroll JS -->
	<script src="{{ asset('back-end/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js'); }}"></script>
	<script src="{{ asset('back-end/assets/vendor/overlay-scroll/custom-scrollbar.js'); }}"></script>

	<!-- Apex Charts -->
	<script src="{{ asset('back-end/assets/vendor/apex/apexcharts.min.js'); }}"></script>
	<script src="{{ asset('back-end/assets/vendor/apex/custom/home/patients.js'); }}"></script>
	<script src="{{ asset('back-end/assets/vendor/apex/custom/home/treatment.js'); }}"></script>
	<script src="{{ asset('back-end/assets/vendor/apex/custom/home/available-beds.js'); }}"></script>
	<script src="{{ asset('back-end/assets/vendor/apex/custom/home/earnings.js'); }}"></script>
	<script src="{{ asset('back-end/assets/vendor/apex/custom/home/gender-age.js'); }}"></script>
	<script src="{{ asset('back-end/assets/vendor/apex/custom/home/claims.js'); }}"></script>

	<!-- Custom JS files -->
	<script src="{{ asset('back-end/assets/js/custom.js'); }}"></script>
</body>


<!-- Mirrored from bootstrapget.com/demos/medflex-medical-admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Nov 2025 19:25:04 GMT -->
</html>