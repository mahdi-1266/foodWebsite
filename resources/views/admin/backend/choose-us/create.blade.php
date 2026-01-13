@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Add Choice</h5>
  <form action="{{ route('choice.store'); }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">

      <div class="col-sm-6 col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Enter the title2">
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Image</label>
              <input type="file" name='photo' class="form-control" id="abc">
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc6">Description</label>
              <textarea class="form-control" name="description" rows="3" placeholder="Enter the description"></textarea>
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