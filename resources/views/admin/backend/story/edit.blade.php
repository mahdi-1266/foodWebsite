@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Add Product</h5>
  <form action="{{ route('story.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Story Title</label>
              <input type="text" class="form-control" name="title" value="{{ $story->title }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Phone Number</label>
              <input type="text" class="form-control" name="phone" value="{{ $story->phone }}">
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Photo 1</label>
              <input type="file" name='photo1' class="form-control">
            </div>
          </div>
        </div>
      </div>

        <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Photo 2</label>
              <input type="file" name='photo2' class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc6">Story Description</label>
              <textarea class="form-control" name="description" rows="3">{{ $story->description }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-2">
        <input type="hidden" class="form-control" name="id" value="{{ $story->id }}">
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