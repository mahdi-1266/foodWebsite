@extends('admin.dashboard')
@section('dashboard-body')
  <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Name</th>
                <th scope="col" class="border">Phone</th>
                <th scope="col" class="border">Delivery Address</th>
                <th scope="col" class="border">Orders</th>
                <th scope="col" class="border">Status</th>
                <th scope="col" class="border">Action</th>
              </tr>
            </thead>

            <tbody>
              @php
                $orders = App\Models\CustomerInformation::get();
              @endphp

              {{-- @php
                $orders = App\Models\OrderItem::get();
              @endphp --}}

              @foreach ($orders as $order)
                <tr class="text-center">
                  <td class="border">{{ $order->id }}</td>
                  <td class="border">{{ $order->name }}</td>
                  <td class="border">{{ $order->phone }}</td>
                  <td class="border">{{ $order->delivery_address }}</td>
                  <td class="border">Qabli palaw</td>
                  <td class="border" id="status-td">pending</td>
                  <td class="d-flex justify-content-center align-items-center flex-column border">
                    <a href="" type="button" class="w-50 btn btn-primary status-btn">Accept</a>
                    <a href="" type="button" class="w-50 btn btn-danger mt-2 status-btn">Cancel</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

<script>
  document.addEventListener('DOMContentLoaded'), () => {
    let statusButtons = document.querySelectorAll('.status-btn');

    statusButtons.forEach(function btn {
      btn.addEventListener('click', function() {
        handle(btn);
      });
    });

    function handle(btn){}

  }
</script>
@endsection