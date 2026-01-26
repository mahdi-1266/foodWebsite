<nav id="sidebar" class="sidebar-wrapper">

  <!-- Sidebar profile starts -->
  <div class="sidebar-profile">
    <img src="{{ asset('back-end/assets/images/user6.png'); }}" class="img-shadow img-3x me-3 rounded-5" alt="Hospital Admin Templates">
    <div class="m-0">
      <h5 class="mb-1 profile-name text-nowrap text-truncate">Nick Gonzalez</h5>
      <p class="m-0 small profile-name text-nowrap text-truncate">Dept Admin</p>
    </div>
  </div>
  <!-- Sidebar profile ends -->

  <!-- Sidebar menu starts -->
  <div class="sidebarMenuScroll">
    <ul class="sidebar-menu">
      <li class="treeview">
        <a href="#!">
          <i class="ri-home-line"></i>
          <span class="menu-text">All Tables</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('heroSection') }}">Hero Section</a>
          </li>
          <li>
            <a href="{{ route('allFoods') }}">Foods</a>
          </li>
          <li>
            <a href="{{ route('offers') }}">Offers</a>
          </li>
          <li>
            <a href="{{ route('story') }}">Stories</a>
          </li>
          <li>
            <a href="{{ route('specialDishes') }}">Special Dishes</a>
          </li>
           <li>
            <a href="{{ route('allChoice') }}">Choices</a>
          </li>
          <li>
            <a href="{{ route('allevent') }}">Events</a>
          </li>
          <li>
            <a href="{{ route('testimonial') }}">Testimonial</a>
          </li>
          <li>
            <a href="{{ route('all-menu') }}">All Menu</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">Form</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('form') }}">Form</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-user-line"></i>
          <span class="menu-text">Customer Info</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('customer-info') }}">Customer Info</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- Sidebar menu ends -->

  <!-- Sidebar contact starts -->
  <div class="sidebar-contact">
    <p class="fw-light mb-1 text-nowrap text-truncate">Emergency Contact</p>
    <h5 class="m-0 lh-1 text-nowrap text-truncate">0987654321</h5>
    <i class="ri-phone-line"></i>
  </div>
  <!-- Sidebar contact ends -->

</nav>