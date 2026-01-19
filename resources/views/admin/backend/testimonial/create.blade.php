@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Add Testimonial</h5>
  <form action="{{ route('store.testimonial') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">

      <div class="col-sm-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label">Description</label>
              <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Enter the description"></textarea>
              @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label">Photo</label>
              <input type="file" name='photo' class="form-control">
              @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label">Name</label>
              <input type="text" name='name' class="form-control" placeholder="Enter the name">
              @error('name') <span class="text-danger">{{ $message }}</span> @enderror
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