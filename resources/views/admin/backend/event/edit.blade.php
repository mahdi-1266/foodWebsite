@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Edit Event</h5>
  <form action="{{ route('event.update'); }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">

      <div class="col-sm-6 col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Text</label>
              <input type="text" class="form-control" name="text" value="{{ $event->text }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="m-0">
              <label class="form-label" for="abc">Date</label>
              <input type="date" class="form-control" name="date">
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-12 col-12 mb-3">
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
              <textarea class="form-control" name="description" rows="3">{{ $event->description }}</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="m-0">
      <input type="hidden" class="form-control" name="id" value="{{ $event->id }}">
    </div>

    <div class="m-0 col-sm-2">
      <input type="submit" class="form-control btn btn-primary" value="Submit">
    </div>
    <!-- Row ends -->
  </form>
</div>
<!-- App body ends -->
@endsection