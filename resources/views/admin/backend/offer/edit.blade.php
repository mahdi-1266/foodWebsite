@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Edit Product</h5>
  <form action="{{ route('offers.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->

    <div class="mb-2">
      <input type="hidden" class="form-control" name="id" value="{{ $offer->id }}">
    </div>

    <div class="row gx-3">
      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-1">
              <label class="form-label" for="abc">Offer Category</label>
              <input type="text" class="form-control" name="offercategory" value="{{ $offer->foodcategory }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-1">
              <label class="form-label" for="abc">Offer Menu</label>
              <input type="text" class="form-control" name="menu" value="{{ $offer->menu }}">
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-1">
              <label class="form-label" for="abc">Offer Image</label>
              <input type="file" name='photo' class="form-control">
            </div>
          </div>
        </div>
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