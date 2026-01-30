@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Add Menu</h5>
  <form action="{{ route('update-all-menu') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">

      <div class="col-sm-6 col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $menu->name }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Price</label>
              <input type="number" class="form-control" name="price" value="{{ $menu->price }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Category</label>
              <input type="text" class="form-control" name="category" value="{{ $menu->category }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Image</label>
              <input type="file" name='photo' class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc6">Description</label>
              <textarea class="form-control" name="description" rows="3">{{ $menu->description }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="m-0">
        <input type="hidden" class="form-control" name="id" value="{{ $menu->id }}">
      </div>

    </div>

    <div class="m-0 col-sm-2">
      <input type="submit" class="form-control btn btn-primary" value="Submit">
    </div>
    <!-- Row ends -->
  </form>
</div>
<!-- App body ends -->
@endsection