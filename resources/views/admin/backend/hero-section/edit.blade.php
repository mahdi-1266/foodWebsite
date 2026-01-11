@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Add Product</h5>
  <form action="{{ route('update.hero.section'); }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">
      <div class="col-sm-6 col-12">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Hero Text</label>
              <input type="text" class="form-control" name="text" value="{{ $content->text }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Hero Title</label>
              <input type="text" class="form-control" name="title" value="{{ $content->title }}">
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-12">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Hero Image</label>
              <input type="file" name='photo' class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc6">Hero Description</label>
              <textarea class="form-control" name="description" rows="3">{{ $content->text }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-2">
        <input type="hidden" class="form-control" name="id" value="{{ $content->id }}">
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