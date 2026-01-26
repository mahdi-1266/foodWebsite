@extends('admin.dashboard')
@section('dashboard-body')
<div class="col-sm-12">
  <div class="card mb-3">
    <div class="card-header">
      <h5 class="card-title">Customer Info Table</h5>
    </div>
    <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Name</th>
                <th scope="col" class="border">Email</th>
                <th scope="col" class="border">Phone</th>
                <th scope="col" class="border">Delivery Date</th>
                <th scope="col" class="border">Delivery Time</th>
                <th scope="col" class="border">Delivery Address</th>
                <th scope="col" class="border">View</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            @php
              $customers = App\Models\CustomerInformation::get()
            @endphp

            @foreach($customers as $customer)
              <tbody>
                <tr class="text-center">
                  <td class="border border-2">{{ $customer->id }}</td>
                  <td class="border border-2">{{ $customer->name }}</td>
                  <td class="border border-2">{{ $customer->email }}</td>
                  <td class="border border-2">{{ $customer->phone }}</td>
                  <td class="border border-2">{{ $customer->delivery_date }}</td>
                  <td class="border border-2">{{ $customer->delivery_time }}</td>
                  <td class="border border-2">{{ $customer->delivery_address }}</td>

                  <td class="border border-2">
                    <a class="btn btn-primary btn-sm mb-1" href="{{ route('order-view', $customer->id) }}">View</a>
                  </td>

                  <td class="border border-2">
                    <a class="btn btn-danger btn-sm mb-1" href="">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>

      <a href="" class="btn btn-primary my-2 py-2 px-3">Add Customer Info</a>
    </div>
  </div>
</div>
@endsection