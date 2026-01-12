@extends('admin.dashboard')
@section('dashboard-body')
<div class="col-sm-12">
  <div class="card mb-3">
    <div class="card-header">
      <h5 class="card-title">Foods Table</h5>
    </div>
    <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Name</th>
                <th scope="col" class="border">Description</th>
                <th scope="col" class="border">Slug</th>
                <th scope="col" class="border">Quantity</th>
                <th scope="col" class="border">Price</th>
                <th scope="col" class="border">Photo</th>
                <th scope="col" class="border">Edit</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            <!-- @php
              $foods = App\Models\Foods::get()
            @endphp -->

            <!-- @foreach($foods as $food) -->
              <tbody>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <!-- <tr class="text-center">
                  <td class="border border-2">{{ $food->id }}</td>
                  <td class="border border-2">{{ $food->name }}</td>
                  <td class="border border-2">{{ $food->description }}</td>
                  <td class="border border-2">{{ $food->slug }}</td>
                  <td class="border border-2">{{ $food->quantity }}</td>
                  <td class="border border-2">{{ '$'.$food->price }}</td>
                  <td class="border border-2">
                    <img src="{{ $food->photo }}" height="50px" width="100px" alt="Image">
                  </td>
                  <td class="border border-2">
                    <a class="btn btn-info btn-sm" href="{{ route('food.edit', $food->id); }}">
                      <i class="ri-mark-pen-line"></i>
                    </a>
                  </td>
                  <td class="border border-2">
                    <a class="btn btn-danger btn-sm mb-1" href="{{ route('food.delete', $food->id); }}">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr>               -->
            </tbody>
            <!-- @endforeach -->

            
          </table>
        </div>
      </div>

      <a href="{{ route('food.create'); }}" class="btn btn-primary my-2 py-2 px-3">Add Food</a>
    </div>
  </div>
</div>
@endsection