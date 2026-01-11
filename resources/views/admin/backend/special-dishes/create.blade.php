@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Add Special Dishes</h5>
  <form action="{{ route('special-dishes.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dishes Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter the title">
              @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dishes New-Price</label>
              <input type="number" name='new_price' class="form-control" placeholder="Enter the new price">
              @error('new_price') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dishes Old-Price</label>
              <input type="number" class="form-control" name="old_price" placeholder="Enter the old price">
              @error('old_price') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dishes Photo</label>
              <input type="file" class="form-control" name="photo">
              @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Special-Dishes Description</label>
              <textarea name="description" class="form-control" rows="3" placeholder="Enter the description"></textarea>
              @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
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