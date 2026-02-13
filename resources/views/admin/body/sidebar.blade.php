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
          <i class="ri-message-line"></i>
          <span class="menu-text">All Hero Section</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('heroSection') }}">Hero Section</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">Food</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('allFoods') }}">Foods</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">Menu Food</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('all-menu') }}">Foods</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">All Offer</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('offers') }}">Offers</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">All Story</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('story') }}">Stories</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">All Special Dish</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('specialDishes') }}">Special Dishes</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">All Choice</span>
        </a>
        <ul class="treeview-menu">
           <li>
            <a href="{{ route('allChoice') }}">Choices</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">All Event</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('allevent') }}">Events</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#!">
          <i class="ri-message-line"></i>
          <span class="menu-text">All Testimonial</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{ route('testimonial') }}">Testimonials</a>
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