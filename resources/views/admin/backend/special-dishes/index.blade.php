@extends('admin.dashboard')
@section('dashboard-body')
<div class="col-sm-12">
  <div class="card mb-3">
    <div class="card-header">
      <h5 class="card-title">Default</h5>
    </div>
    <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Title</th>
                <th scope="col" class="border">Description</th>
                <th scope="col" class="border">New price</th>
                <th scope="col" class="border">Old price</th>
                <th scope="col" class="border">Photo</th>
                <th scope="col" class="border">Edit</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            @php
              $dishes = App\Models\SpecialDish::get()
            @endphp

            @foreach($dishes as $dish)
              <tbody>
                <tr class="text-center">
                  <td class="border">{{ $dish->id }}</td>
                  <td class="border">{{ $dish->title }}</td>
                  <td class="border">{{ $dish->description }}</td>
                  <td class="border">{{ $dish->new_price }}</td>
                  <td class="border">{{ $dish->old_price }}</td>

                  <td class="border">
                    <img src="{{ asset($dish->photo) }}" alt="image" width="100" height="50">
                  </td>

                  <td class="border">
                    <a class="btn btn-info btn-sm" href="">
                      <i class="ri-mark-pen-line"></i>
                    </a>
                  </td>
                  
                  <td class="border">
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

      <a href="{{ route('special-dishes.create'); }}" class="btn btn-primary my-2 py-2 px-3">Add Special Dish</a>
    </div>
  </div>
</div>
@endsection