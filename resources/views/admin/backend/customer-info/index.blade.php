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
                <th scope="col" class="border">Phone</th>
                <th scope="col" class="border">Customer Quantity</th>
                <th scope="col" class="border">Date</th>
                <th scope="col" class="border">Time</th>
                <th scope="col" class="border">Description</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            {{-- @php
              $forms = App\Models\Form::get()
            @endphp --}}

            {{-- @foreach($forms as $form) --}}
              <tbody>
                <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                </tr>
                {{-- <tr class="text-center">
                  <td class="border border-2">{{ $form->id }}</td>
                  <td class="border border-2">{{ $form->name }}</td>
                  <td class="border border-2">{{ $form->phone }}</td>
                  <td class="border border-2">{{ $form->customer_qty }}</td>
                  <td class="border border-2">{{ $form->date }}</td>
                  <td class="border border-2">{{ $form->time }}</td>
                  <td class="border border-2">{{ $form->description }}</td>

                  <td class="border border-2">
                    <a class="btn btn-danger btn-sm mb-1" href="{{ route('form.delete', $form->id) }}">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr> --}}
            </tbody>
            {{-- @endforeach --}}
          </table>
        </div>
      </div>

      <a href="" class="btn btn-primary my-2 py-2 px-3">Add Food</a>
    </div>
  </div>
</div>
@endsection