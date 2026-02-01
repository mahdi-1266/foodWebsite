<div class="app-header d-flex align-items-center">

	<!-- Toggle buttons starts -->
	<div class="d-flex">
		<button class="toggle-sidebar">
			<i class="ri-menu-line"></i>
		</button>
		<button class="pin-sidebar">
			<i class="ri-menu-line"></i>
		</button>
	</div>
	<!-- Toggle buttons ends -->

	<!-- App brand starts -->
	<div class="app-brand ms-3">
		<a href="index-2.html" class="d-lg-block d-none">
			<img src="{{ asset('back-end/assets/images/logo.svg'); }}" class="logo" alt="Medicare Admin Template">
		</a>
		<a href="index-2.html" class="d-lg-none d-md-block">
			<img src="{{ asset('back-end/assets/images/logo-sm.svg'); }} " class="logo" alt="Medicare Admin Template">
		</a>
	</div>
	<!-- App brand ends -->

	<!-- App header actions starts -->
	<div class="header-actions d-flex justify-content-betwee">

		<!-- Header user settings starts -->

    {{-- Notifications --}}
    <div class="dropdown notification">
			<a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!" role="button"
				data-bs-toggle="dropdown" aria-expanded="false">
				<div class="avatar-box">Notifications<span class="status busy"></span></div>
			</a>

			<div class="notification-dropdown-menu dropdown-menu dropdown-menu-end shadow-lg visible">
        <div class="w-100 h-100">
          <div class="d-flex justify-content-between align-items-center px-2">
            <a href="{{ route('notification') }}" target="__blank"><h5 class="m-2">Orders</h5></a>


            <div class="order-box d-flex justify-content-center align-items-center bg-primary">
              <span class="text-white fw-bold">2</span>
            </div>
          </div>
        </div>
			</div>
		</div>


    <div class="dropdown ms-1">
			<a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!" role="button"
				data-bs-toggle="dropdown" aria-expanded="false">
				<div class="avatar-box">JB<span class="status busy"></span></div>
			</a>
			<div class="dropdown-menu dropdown-menu-end shadow-lg">
				<div class="px-3 py-2">
					<span class="small">Admin</span>
					<h6 class="m-0">James Bruton</h6>
				</div>
				<div class="mx-3 my-2 d-grid">
					<a href="{{ route('admin.logout') }}" class="btn btn-danger">Logout</a>
				</div>
			</div>
		</div>
		<!-- Header user settings ends -->

	</div>
	<!-- App header actions ends -->

</div>