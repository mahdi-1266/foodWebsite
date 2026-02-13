@extends('frontend.dashboard')
@section('frontend')
  <section class="order-container">
		<div class="order-content-container">
			<div class="order-title">
				<h1>Place Your Order</h1>
				<p class="order-subtitle">Delicious food delivered to your doorstep</p>
			</div>

			<div class="order-grid">

        @foreach($cart as $foodId => $item)
          @php
            $food = \App\Models\AllFoodMenu::find($foodId);
          @endphp

          <div class="menu-item">
            <img src="{{ asset($food->photo) }}" class="menu-image">

            <div class="menu-content">
              <div class="menu-header">
                <h3 class="menu-name">{{ $food->name }}</h3>
                <span class="menu-price">
                  ${{ number_format($item['total'], 2) }}
                </span>
              </div>

              <p class="menu-description">{{ $food->description }}</p>

              <p class="quantity"><strong>Quantity:</strong> {{ $item['qty'] }}</p>
              <p class="price"><strong>Unit Price:</strong> ${{ $item['price'] }}</p>
            </div>
          </div>
        @endforeach
      </div>


			<div class="order-form-container">
				<h2 class="form-title">Customer Information</h2>

				<form class="order-form" action="{{ route('store-customer-info') }}" method="post">
          @csrf

					<div class="form-group">
						<label for="name" class="form-label">Full Name</label>
						<input type="text" id="name" name="name" class="form-input" placeholder="Enter your full name" required>
					</div>

					<div class="form-group">
						<label for="email" class="form-label">Email Address</label>
						<input type="email" id="email" name="email" class="form-input" placeholder="Enter your email" required>
					</div>

					<div class="form-group">
						<label for="phone" class="form-label">Phone Number</label>
						<input type="text" id="phone" name="phone" class="form-input" placeholder="Enter your number" required>
					</div>

          {{-- @php
            $menus = App\Models\AllFoodMenu::get();
          @endphp --}}
          {{-- @foreach ($menus as $menu) --}}
            {{-- <div class="form-group">
              <label for="delivery-date" class="form-label">Food Name</label>
              <input type="text" name="item" class="form-input">
            </div> --}}
          {{-- @endforeach --}}

          {{-- @php
            $menus = App\Models\AllFoodMenu::get();
          @endphp
          @foreach ($menus as $menu)
            <div class="form-group">
              <label for="delivery-date" class="form-label">Food Quantity</label>
              <input type="number" name="item_qty" class="form-input" readonly value="{{ $menu->qty }}">
            </div>
          @endforeach --}}

          {{-- @php
            $menus = App\Models\AllFoodMenu::get();
          @endphp
          @foreach ($menus as $menu)
            <div class="form-group">
              <label for="delivery-date" class="form-label">Food Price</label>
              <input type="number" name="price" class="form-input" readonly value="{{ $menu->price }}">
            </div>
          @endforeach --}}



          <div class="form-group">
						<label for="delivery-date" class="form-label">Preferred Delivery Date</label>
						<input type="date" id="delivery-date" name="delivery_date" class="form-input" required>
					</div>

          <div class="form-group">
						<label for="delivery-time" class="form-label">Preferred Delivery Time</label>
						<select id="delivery-time" name="delivery_time" class="form-select" required>
							<option value="">Select time</option>
							<option value="11:00">11:00 AM</option>
							<option value="12:00">12:00 PM</option>
							<option value="13:00">1:00 PM</option>
							<option value="14:00">2:00 PM</option>
							<option value="17:00">5:00 PM</option>
							<option value="18:00">6:00 PM</option>
							<option value="19:00">7:00 PM</option>
							<option value="20:00">8:00 PM</option>
						</select>
					</div>

          <div class="form-group">
						<label for="address" class="form-label">Delivery Address</label>
						<textarea id="address" name="delivery_address" class="form-textarea" placeholder="Enter your full address" required></textarea>
					</div>


          {{-- {{ route('purchase') }} --}}
          {{-- <a href="{{ route('store-customer-info') }}" class="submit-btn" target="__blank">Place Order</a> --}}
          <button type="submit" class="submit-btn">Place Order</button>
				</form>
			</div>
		</div>
	</section>

  <script src="{{ asset('front-end/assets/js/food.js') }}"></script>
@endsection