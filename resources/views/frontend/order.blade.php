<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Order - Grilli Restaurant</title>
	<link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}">
	<style>
		.order-container {
			padding: 5rem 0;
			background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
			min-height: 100vh;
		}

		.order-content-container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 0 2rem;
		}

		.order-title {
			text-align: center;
			margin-bottom: 3rem;
		}

		.order-title h1 {
			font-size: 3rem;
			color: #2c3e50;
			margin-bottom: 0.5rem;
			font-weight: 700;
		}

		.order-subtitle {
			font-size: 1.2rem;
			color: #7f8c8d;
			font-weight: 300;
		}

		.order-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
			gap: 2rem;
			margin-bottom: 4rem;
		}

		.menu-item {
			background: white;
			border-radius: 15px;
			box-shadow: 0 10px 30px rgba(0,0,0,0.1);
			overflow: hidden;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		.menu-item:hover {
			transform: translateY(-5px);
			box-shadow: 0 20px 40px rgba(0,0,0,0.15);
		}

		.menu-image {
			width: 100%;
			height: 200px;
			object-fit: cover;
		}

		.menu-content {
			padding: 1.5rem;
		}

		.menu-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 0.5rem;
		}

		.menu-name {
			font-size: 1.4rem;
			font-weight: 600;
			color: #2c3e50;
			margin: 0;
		}

		.menu-price {
			font-size: 1.3rem;
			font-weight: 700;
			color: #e74c3c;
		}

		.menu-description {
			color: #7f8c8d;
			margin-bottom: 1rem;
			line-height: 1.5;
		}

		.quantity-controls {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.qty-controls {
			display: flex;
			align-items: center;
			gap: 0.5rem;
		}

		.qty-btn {
			background: #3498db;
			color: white;
			border: none;
			width: 30px;
			height: 30px;
			border-radius: 50%;
			cursor: pointer;
			font-size: 1.2rem;
			font-weight: bold;
			transition: background 0.3s ease;
		}

		.qty-btn:hover {
			background: #2980b9;
		}

		.qty-input {
			width: 50px;
			text-align: center;
			border: 1px solid #bdc3c7;
			border-radius: 5px;
			padding: 0.3rem;
			font-size: 1rem;
		}

		.order-form-container {
			background: white;
			border-radius: 15px;
			box-shadow: 0 10px 30px rgba(0,0,0,0.1);
			padding: 2.5rem;
			max-width: 600px;
			margin: 0 auto;
		}

		.form-title {
			text-align: center;
			font-size: 2rem;
			color: #2c3e50;
			margin-bottom: 2rem;
			font-weight: 600;
		}

		.order-form {
			display: grid;
			gap: 1.5rem;
		}

		.form-group {
			display: flex;
			flex-direction: column;
		}

		.form-label {
			font-size: 1rem;
			font-weight: 500;
			color: #2c3e50;
			margin-bottom: 0.5rem;
		}

		.form-input,
		.form-textarea,
		.form-select {
			padding: 0.8rem;
			border: 1px solid #bdc3c7;
			border-radius: 8px;
			font-size: 1rem;
			transition: border-color 0.3s ease, box-shadow 0.3s ease;
		}

		.form-input:focus,
		.form-textarea:focus,
		.form-select:focus {
			outline: none;
			border-color: #3498db;
			box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
		}

		.form-textarea {
			resize: vertical;
			min-height: 80px;
		}

		.submit-btn {
			background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
			color: white;
			border: none;
			padding: 1rem 2rem;
			border-radius: 8px;
			font-size: 1.1rem;
			font-weight: 600;
			cursor: pointer;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			margin-top: 1rem;
		}

		.submit-btn:hover {
			transform: translateY(-2px);
			box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
		}

		.menu-badge {
			background: #f39c12;
			color: white;
			padding: 0.2rem 0.5rem;
			border-radius: 12px;
			font-size: 0.8rem;
			font-weight: 500;
			display: inline-block;
		}

		@media (max-width: 768px) {
			.order-grid {
				grid-template-columns: 1fr;
			}

			.order-title h1 {
				font-size: 2rem;
			}

			.order-form-container {
				padding: 1.5rem;
			}
		}
	</style>
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
					<img src="{{ asset('front-end/assets/images/hero-slider-1.jpg') }}" alt="Grilled Salmon" class="menu-image">
					<div class="menu-content">
						<div class="menu-header">
							<h3 class="menu-name">Grilled Salmon</h3>
							<span class="menu-price">$24.99</span>
						</div>
						<p class="menu-description">Fresh Atlantic salmon grilled to perfection with herbs and lemon.</p>
						<div class="quantity-controls">
							<div class="qty-controls">
								<button class="qty-btn" onclick="changeQty('salmon', -1)">-</button>
								<input type="number" id="qty-salmon" value="0" min="0" class="qty-input" readonly>
								<button class="qty-btn" onclick="changeQty('salmon', 1)">+</button>
							</div>
							<span class="menu-badge">Popular</span>
						</div>
					</div>
				</div>

				<!-- Sample Menu Item 2 -->
				<div class="menu-item">
					<img src="{{ asset('front-end/assets/images/hero-slider-2.jpg') }}" alt="Beef Burger" class="menu-image">
					<div class="menu-content">
						<div class="menu-header">
							<h3 class="menu-name">Classic Beef Burger</h3>
							<span class="menu-price">$16.99</span>
						</div>
						<p class="menu-description">Juicy beef patty with cheese, lettuce, tomato, and our special sauce.</p>
						<div class="quantity-controls">
							<div class="qty-controls">
								<button class="qty-btn" onclick="changeQty('burger', -1)">-</button>
								<input type="number" id="qty-burger" value="0" min="0" class="qty-input" readonly>
								<button class="qty-btn" onclick="changeQty('burger', 1)">+</button>
							</div>
							<span class="menu-badge">New</span>
						</div>
					</div>
				</div>

				<!-- Sample Menu Item 3 -->
				<div class="menu-item">
					<img src="{{ asset('front-end/assets/images/hero-slider-3.jpg') }}" alt="Margherita Pizza" class="menu-image">
					<div class="menu-content">
						<div class="menu-header">
							<h3 class="menu-name">Margherita Pizza</h3>
							<span class="menu-price">$18.99</span>
						</div>
						<p class="menu-description">Traditional pizza with fresh mozzarella, tomatoes, and basil.</p>
						<div class="quantity-controls">
							<div class="qty-controls">
								<button class="qty-btn" onclick="changeQty('pizza', -1)">-</button>
								<input type="number" id="qty-pizza" value="0" min="0" class="qty-input" readonly>
								<button class="qty-btn" onclick="changeQty('pizza', 1)">+</button>
							</div>
							<span class="menu-badge">Vegetarian</span>
						</div>
					</div>
				</div>

				<!-- Sample Menu Item 4 -->
				<div class="menu-item">
					<img src="{{ asset('front-end/assets/images/about-abs-image.jpg') }}" alt="Caesar Salad" class="menu-image">
					<div class="menu-content">
						<div class="menu-header">
							<h3 class="menu-name">Caesar Salad</h3>
							<span class="menu-price">$12.99</span>
						</div>
						<p class="menu-description">Crisp romaine lettuce with parmesan, croutons, and Caesar dressing.</p>
						<div class="quantity-controls">
							<div class="qty-controls">
								<button class="qty-btn" onclick="changeQty('salad', -1)">-</button>
								<input type="number" id="qty-salad" value="0" min="0" class="qty-input" readonly>
								<button class="qty-btn" onclick="changeQty('salad', 1)">+</button>
							</div>
							<span class="menu-badge">Healthy</span>
						</div>
					</div>
				</div>
			</div>

			<div class="order-form-container">
				<h2 class="form-title">Customer Information</h2>
				<form class="order-form" action="#" method="post">
					<div class="form-group">
						<label for="name" class="form-label">Full Name</label>
						<input type="text" id="name" name="name" class="form-input" required>
					</div>

					<div class="form-group">
						<label for="email" class="form-label">Email Address</label>
						<input type="email" id="email" name="email" class="form-input" required>
					</div>

					<div class="form-group">
						<label for="phone" class="form-label">Phone Number</label>
						<input type="tel" id="phone" name="phone" class="form-input" required>
					</div>

					<div class="form-group">
						<label for="address" class="form-label">Delivery Address</label>
						<textarea id="address" name="address" class="form-textarea" placeholder="Enter your full address" required></textarea>
					</div>

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
						<label for="special-instructions" class="form-label">Special Instructions</label>
						<textarea id="special-instructions" name="special_instructions" class="form-textarea" placeholder="Any special requests or dietary restrictions"></textarea>
					</div>

					<button type="submit" class="submit-btn">Place Order</button>
				</form>
			</div>
		</div>
	</section>

	<script>
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
	</script>
</body>
</html>
