@extends('frontend.dashboard')
@section('frontend')
  <section class="section menu all-menu-container" aria-label="menu-label" id="menu">
    <div class="container">
      <p class="section-subtitle text-center label-2">All Foods Menu List</p>

      <h2 class="headline-1 section-title text-center">All Delicious Menu</h2>

      <ul class="grid-list">

        @php
            $menus = App\Models\AllFoodMenu::get();
        @endphp

        @foreach($menus as $menu)
          <li>
            <div class="menu-card hover:card">
              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="{{ $menu->photo }}" width="100px" height="100px" loading="lazy" alt="{{ $menu->name }}"
                class="img-cover">
              </figure>

              <div>
                <div class="title-wrapper">
                  <h3 class="title-3">
                      <a href="#" class="card-title">{{ $menu->name }}</a>
                  </h3>
                  <span class="span title-2">{{ '$'.$menu->price }}</span>
                </div>

                <p class="card-text label-1">{{ $menu->description }}</p>

                <a href="{{ route('show-menu-food', $menu->slug) }}" target="__blank" class="order-btn">
                  <span>Submit Order</span>
                </a>

              </div>
            </div>
          </li>
        @endforeach
      </ul>

      <p class="menu-text text-center">
        During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
      </p>

      <a href="{{ route('all-menu') }}" target="__blank" class="btn btn-primary">
        <span class="text text-1">View All Menu</span>
        <span class="text text-2" aria-hidden="true">View All Menu</span>
      </a>

      <img src="{{ asset('front-end/assets/images/shape-5.png'); }}" width="921" height="1036" loading="lazy" alt="shape"
      class="shape shape-2 move-anim">
      <img src="{{ asset('front-end/assets/images/shape-6.png'); }}" width="343" height="345" loading="lazy" alt="shape"
      class="shape shape-3 move-anim">

    </div>
  </section>
@endsection


{{-- <script>
		function changeQty(item, change) {
			const input = document.getElementById('qty-' + item);
			let currentValue = parseInt(input.value);
			let newValue = currentValue + change;
			if (newValue >= 0) {
				input.value = newValue;
			}
		}

		// Set minimum date to today
		const today = new Date().toISOString().split('T')[0];
		document.getElementById('delivery-date').setAttribute('min', today);
	</script> --}}