@extends('frontend.dashboard')
@section('frontend')
  <section class="section menu all-menu-container" aria-label="menu-label" id="menu">
    <div class="container">
      <p class="section-subtitle text-center label-2">All Foods Menu List</p>
      <h2 class="headline-1 section-title text-center">All Delicious Menu</h2>

      <div class="menu-list-cotainer">
        <div class="">
          <ul>

            <li class="all-menu-items">
              <a href="#" id="btn" class="btn btn-primary">
                <span class="text text-1">All food</span>
                <span class="text text-2" aria-hidden="true">All food</span>
              </a>
            </li>

            <li class="all-menu-items">
              <a href="#" id="btn" class="btn btn-primary">
                <span class="text text-1">Fast food</span>
                <span class="text text-2" aria-hidden="true">Fast food</span>
              </a>
            </li>

            <li class="all-menu-items">
              <a href="#" class="btn btn-primary">
                <span class="text text-1">Diesser</span>
                <span class="text text-2" aria-hidden="true">Diesser</span>
              </a>
            </li>

            <li class="all-menu-items">
              <a href="#" class="btn btn-primary">
                <span class="text text-1">Drinks</span>
                <span class="text text-2" aria-hidden="true">Drinks</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Form for all foods -->
      <form action="{{ route('cart-food') }}" method="POST">
        @csrf

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

                    <!-- Price displayed as text, unit price stored in data-price -->
                    <span class="span title-2 food-price" data-price="{{ $menu->price }}">
                      ${{ $menu->price }}
                    </span>
                  </div>

                  <p class="card-text label-1">{{ $menu->description }}</p>

                  <!-- Quantity controls -->
                  <div class="quantity-controls">
                    <div class="qty-controls">
                      <button type="button" class="qty-btn sub-btn">-</button>

                      {{--
                        name="items[5][qty]"
                        $request->items = [5 => [ 'qty' => 3 ]];
                      --}}
                      <input type="number" name="items[{{ $menu->id }}][qty]" value="0" min="0" class="qty-input" readonly>

                      <button type="button" class="qty-btn add-btn">+</button>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          @endforeach
        </ul>

        <!-- Submit all selected items -->
        <button type="submit" class="btn btn-primary">
          <span class="text text-1">Submit All</span>
          <span class="text text-2">Submit All</span>
        </button>

      </form>
    </div>
  </section>

  <script src="{{ asset('front-end/assets/js/food.js') }}"></script>
@endsection