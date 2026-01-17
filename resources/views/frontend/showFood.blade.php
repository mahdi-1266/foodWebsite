<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Order - Grilli Restaurant</title>
	<link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}">
</head>
<body>
	<section class="order-container">
		<div class="order-content-container">
			<div class="order-title">
				<h1>Place Your Order</h1>
				<p class="order-subtitle">Delicious food delivered to your doorstep</p>
			</div>

			<div class="order-grid">

				<!-- Sample Menu Item 1 -->
				<div class="menu-item">
					<img src="{{ asset($food->photo) }}" alt="Grilled Salmon" class="menu-image">
					<div class="menu-content">
						<div class="menu-header">
							<h3 class="menu-name">{{ $food->name }}</h3>
							<span class="menu-price">{{ '$'.$food->price }}</span>
						</div>
						<p class="menu-description">{{ $food->description	 }}</p>

            <div class="quantity-controls">
							<div class="qty-controls">

                {{-- onclick="changeQty('salmon', -1)" --}}
								<button class="qty-btn" >-</button>

                <input type="number" id="qty-salmon" value="0" min="0" class="qty-input" readonly>

                {{-- onclick="changeQty('salmon', 1)" --}}
								<button class="qty-btn" >+</button>
							</div>
							<span class="menu-badge">Popular</span>
						</div>
					</div>
				</div>

			</div>

			<div class="order-form-container">
				<h2 class="form-title">Customer Information</h2>

				<form class="order-form" action="#" method="post">
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
						<input type="tel" id="phone" name="phone" class="form-input" placeholder="Enter your number" required>
					</div>


					<div class="form-group">
						<label for="delivery-date" class="form-label">Preferred Delivery Date</label>
						<input type="date" id="delivery-date" name="delivery_date" class="form-input" required>
					</div>

					<div class="form-group">
						<label for="delivery-time" class="form-label">Preferred Delivery Time</label>
						<select id="delivery-time" name="delivery_time" class="form-select" required>
							<option value="">Select person</option>
							<option value="11:00">1 Person</option>
							<option value="12:00">2 Person</option>
							<option value="13:00">3 Person</option>
							<option value="14:00">4 Person</option>
							<option value="17:00">5 Person</option>
							<option value="18:00">6 Person</option>
							<option value="19:00">7 Person</option>
							<option value="20:00">8 Person</option>
						</select>
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
						<textarea id="address" name="address" class="form-textarea" placeholder="Enter your full address" required></textarea>
					</div>

					<div class="form-group">
						<label for="special-instructions" class="form-label">Special Instructions</label>
						<textarea id="special-instructions" name="special_instructions" class="form-textarea" placeholder="Any special requests or dietary restrictions"></textarea>
					</div>

					<button type="submit" class="submit-btn">Place Order</button>
				</form>
			</div>
		</div>
	</section>

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
</body>
</html>