@extends('frontend.dashboard')
@section('frontend')

<link rel="stylesheet" href="{{ asset('front-end/assets/css/style.css') }}">

<section class="invoice-container">
	<div class="invoice">

    <div class="image-container">
      <img src="{{ asset('front-end/assets/images/shape-9.png') }}" alt="">
    </div>

    <div class="image-container">
      <img src="{{ asset('front-end/assets/images/shape-1.png') }}" alt="">
    </div>

    <div class="image-container">
      <img src="{{ asset('front-end/assets/images/shape-7.png') }}" alt="">
    </div>

    <!-- HEADER -->
    <div class="top">
      <div>
          <div class="">
            <img src="{{ asset('front-end/assets/images/logo.svg') }}" alt="">
          </div>

          <p>Downtown Street, City</p>
          <p>Phone: +93 700 000 000</p>
      </div>

      <div class="right">
        <p>
          <strong>Invoice #:</strong> {{ $order->id }}
        </p>
        <p>
          <strong>Date:</strong> {{ $order->delivery_date }}
        </p>

      </div>
    </div>

    <!-- CUSTOMER INFO -->
    <div class="invoice-section">
      <p><strong>Customer Name:</strong> {{ $order->name }}</p>
      <p><strong>Customer Email:</strong> {{ $order->email }}</p>
      <p><strong>Customer Phone:</strong> {{ $order->phone }}</p>
      <p><strong>Customer Address:</strong> {{ $order->delivery_address }}</p>
    </div>

    <!-- ITEMS -->
    <table class="invoice-table">
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
        @foreach($order->items as $i => $item)
          <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $item->food_name }}</td>
            <td>{{ $item->food_qty }}</td>
            <td>${{ number_format($item->food_price, 2) }}</td>
            <td class="right">${{ number_format($item->total_price, 2) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>


    <!-- TOTALS -->
    <div class="summary">

      @php
        $subTotal = $order->items->sum('total_price');
      @endphp
      <div class="summary-content">
        <p><strong>Sub Total:</strong></p>
        <span>${{ number_format($subTotal, 2) }}</span>
      </div>

      <div class="summary-content">
        <p><strong>Tax:</strong></p>
        <span>$0.00</span>
      </div>

      @php
        $grandTotal = $order->items->sum('total_price');
      @endphp

      <div class="summary-content">
        <p><strong>Grand Total:</strong></p>
        <span>${{ number_format($grandTotal, 2) }}</span>
      </div>
    </div>

     <!-- FOOTER -->
    <div class="footer">
      <div class="footer-content">
        <div class="">
          <p><i class="fa-solid fa-location-dot"></i> Downtown Street, City</p>
        </div>

        <div class="">
          <p><i class="fa fa-phone"></i> +93 700 000 000</p>
        </div>

        <div class="">
          <p><i class="fa-solid fa-earth-americas"></i> www.foodorder.com</p>
        </div>
      </div>

      <div class="signature">
        <div class="">
          <span>Admin Signature</span>
        </div>
      </div>

    </div>
	</div>
</section>

@endsection