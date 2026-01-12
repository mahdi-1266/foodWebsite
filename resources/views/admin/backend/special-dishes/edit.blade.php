@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Add Product</h5>
  <form action="{{ route('special-dishes.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">
      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dish Title</label>
              <input type="text" class="form-control" name="title" value="{{ $special_dish->title }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dish Old-Price</label>
              <input type="number" class="form-control" name="old_price" value="{{ $special_dish->old_price }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dish New-Price</label>
              <input type="number" class="form-control" name="new_price" value="{{ $special_dish->new_price }}">
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dish Photo</label>
              <input type="file" name='photo' class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc6">Special-Dish Description</label>
              <textarea class="form-control" name="description" rows="3">{{ $special_dish->	description }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-2">
        <input type="hidden" class="form-control" name="id" value="{{ $special_dish->id }}">
      </div>
    </div>

    <div class="m-0 col-sm-2">
      <input type="submit" class="form-control btn btn-primary" value="Update">
    </div>
    <!-- Row ends -->
  </form>
</div>
<!-- App body ends -->
@endsection