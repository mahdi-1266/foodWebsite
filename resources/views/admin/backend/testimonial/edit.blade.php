@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Edit Testimonial</h5>
  <form action="{{ route('update.testimonial') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Photo</label>
              <input type="file" class="form-control" name="photo">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Description</label>
              <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Enter the description">{{ $testimonial->description }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-2">
        <input type="hidden" class="form-control" name="id" value="{{ $testimonial->id }}">
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