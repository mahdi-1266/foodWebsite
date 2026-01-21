@extends('frontend.dashboard')
@section('frontend')
  <section class="section menu all-menu-container" aria-label="menu-label" id="menu">
    <div class="container">
      <p class="section-subtitle text-center label-2">All Foods Menu List</p>

      <h2 class="headline-1 section-title text-center">All Delicious Menu</h2>

      <ul class="grid-list">

        @php
            $foods = App\Models\Foods::get();
        @endphp

        @foreach($foods as $food)
          <li>
            <div class="menu-card hover:card">
              <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                <img src="{{ $food->photo }}" width="100" height="100" loading="lazy" alt="Greek Salad"
                class="img-cover">
              </figure>

              <div>
                <div class="title-wrapper">
                  <h3 class="title-3">
                      <a href="#" class="card-title">{{ $food->name }}</a>
                  </h3>
                  <span class="span title-2">{{ '$'.$food->price }}</span>
                </div>

                <p class="card-text label-1">{{ $food->description }}</p>

                <div class="quantity-controls">
							    <div class="qty-controls">
                    <button class="qty-btn" >-</button>

                    <input type="number" id="qty-salmon" value="0" min="0" class="qty-input" readonly>

								    <button class="qty-btn" >+</button>
							    </div>

							    <a href="{{ route('show-menu-food', $food->slug) }}" target="__blank" class="order-btn">
                    <span>Submit Order</span>
                  </a>
						    </div>


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