@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Add Offer</h5>
  <form action="{{ route('story.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Story Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter the category">
              @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Phone</label>
              <input type="text" name='phone' class="form-control" placeholder="Enter the phone number">
              @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Photo 1</label>
              <input type="file" class="form-control" name="photo1">
              @error('photo1') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Photo 2</label>
              <input type="file" class="form-control" name="photo2">
              @error('photo2') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Story Description</label>
              <textarea name="description" id="" class="form-control" rows="3"></textarea>
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