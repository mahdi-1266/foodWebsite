@extends('frontend.dashboard')
@section('frontend')

<link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}">

<section class="invoice-container">
	<div class="invoice">

    <!-- HEADER -->
    <div class="top">
      <div>
          <h1>StackLab Restaurant</h1>
          <p>Downtown Street, City</p>
          <p>Phone: +93 700 000 000</p>
      </div>

      <div class="right">
          <p><strong>Invoice #:</strong> 000123</p>
          <p><strong>Date:</strong> 26 Jan 2026</p>
      </div>
    </div>


    <!-- CUSTOMER INFO -->
    <div class="section">
        <p><strong>Customer Name:</strong> John Doe</p>
        <p><strong>Email:</strong> john@example.com</p>
        <p><strong>Phone:</strong> +93 777 777 777</p>
    </div>

    <!-- ITEMS -->
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Item</th>
            <th>Qty</th>
            <th>Price</th>
            <th class="right">Total</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>1</td>
            <td>Chicken Burger</td>
            <td>2</td>
            <td>$5.00</td>
            <td class="right">$10.00</td>
        </tr>

        <tr>
            <td>2</td>
            <td>French Fries</td>
            <td>1</td>
            <td>$3.00</td>
            <td class="right">$3.00</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Cold Drink</td>
            <td>2</td>
            <td>$2.00</td>
            <td class="right">$4.00</td>
        </tr>
        </tbody>
    </table>


    <!-- TOTALS -->
    <table class="summary">
        <tr>
            <td class="right"><strong>Subtotal:</strong></td>
            <td class="right">$17.00</td>
        </tr>
        <tr>
            <td class="right"><strong>Tax:</strong></td>
            <td class="right">$1.70</td>
        </tr>
        <tr>
            <td class="right total">Grand Total:</td>
            <td class="right total">$18.70</td>
        </tr>
    </table>


     <!-- FOOTER -->
    <div class="footer">
        <p>Thank you for dining with us 🍽️</p>
        <p>This is a system-generated invoice.</p>
    </div>
	</div>
</section>

@endsection