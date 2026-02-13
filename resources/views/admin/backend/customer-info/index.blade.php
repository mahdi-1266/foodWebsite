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
                <th scope="col" class="border">Status</th>
                {{-- <th scope="col" class="border">Action</th> --}}
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
                    <a class="btn btn-primary btn-sm mb-1" href="{{ route('invoice', $customer->id) }}">View</a>
                  </td>
                  <td class="border border-2" id="status-td">
                    <button type="submit" class="btn btn-primary pend-btn">Pending</button>
                  </td>

                  <td class="border border-2">
                    <a class="btn btn-danger btn-sm mb-1" href="{{ route('delete-customer-info', $customer->id) }}">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  let pendingBtn = document.querySelectorAll('.pend-btn');

  pendingBtn.forEach(function(btn){
    btn.addEventListener('click', function() {
      handle(btn);
    });
  });

  function handle(btn){
    if(btn.innerText === 'Pending'){
        btn.innerText = 'Accepted';
        btn.classList.remove('btn-primary');
        btn.classList.add('btn-success');
      }
      else if(btn.innerText === 'Accepted'){
        btn.innerText = 'Delivered';
        btn.classList.remove('btn-success');
        btn.classList.add('btn-warning');
      }
      else if(btn.innerText === 'Delivered'){
        btn.innerText = 'Cenceled';
        btn.classList.remove('btn-warning');
        btn.classList.add('btn-danger');
      }
      else if(btn.innerText === 'Cenceled'){
        btn.innerText = 'Pending';
        btn.classList.remove('btn-danger');
        btn.classList.add('btn-primary');
      }
  }
</script>
@endsection