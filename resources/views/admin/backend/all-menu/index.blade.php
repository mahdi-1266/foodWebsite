@extends('admin.dashboard')
@section('dashboard-body')
<div class="col-sm-12">
  <div class="card mb-3">
    <div class="card-header">
      <h5 class="card-title">All Menu Foods</h5>
    </div>
    <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Name</th>
                <th scope="col" class="border">Slug</th>
                <th scope="col" class="border">Category</th>
                <th scope="col" class="border">Description</th>
                <th scope="col" class="border">Price</th>
                <th scope="col" class="border">Photo</th>
                <th scope="col" class="border">Edit</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            @php
              $menus = App\Models\AllFoodMenu::get();
            @endphp
            <tbody>
              @foreach ($menus as $menu)
                <tr class="text-center">
                  <td class="border">{{ $menu->id }}</td>
                  <td class="border">{{ $menu->name }}</td>
                  <td class="border">{{ $menu->slug }}</td>
                  <td class="border">{{ $menu->category }}</td>
                  <td class="border">{{ $menu->description }}</td>
                  <td class="border">{{ $menu->price }}</td>
                  <td class="border">
                    <img src="{{ $menu->photo }}" width="100" height="50" alt="{{ $menu->name }}">
                  </td>
                  <td class="border">
                    <a class="btn btn-info btn-sm" href="{{ route('edit-all-menu', $menu->id) }}">
                      <i class="ri-mark-pen-line"></i>
                    </a>
                  </td>
                  <td class="border">
                    <a class="btn btn-danger btn-sm mb-1" href="{{ route('delete-all-menu', $menu->id) }}">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <a href="{{ route('create-all-menu') }}" class="btn btn-primary my-2 py-2 px-3">Add Menu</a>
    </div>
  </div>
</div>
@endsection