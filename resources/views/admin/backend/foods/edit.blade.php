@extends('admin.dashboard')
@section('dashboard-body')
<!-- App body starts -->
<div class="app-body w-50 mx-auto mt-4 border border-2">
  <h5 class="mb-3">Edit Product</h5>
  <form action="{{ route('food.update'); }}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Row starts -->
    <div class="row gx-3">
      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-1">
              <label class="form-label" for="abc">Food Name</label>
              <input type="text" class="form-control" name="updateFoodName" value="{{ $food->name }}">
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-1">
              <label class="form-label" for="abc">Food Image</label>
              <input type="file" name='updateFoodImg' class="form-control" id="abc">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-1">
              <label class="form-label" for="abc">Food Quantity</label>
              <input type="number" class="form-control" name="updateFoodQuantity" value="{{ $food->quantity }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-12 mb-2">
        <div class="card">
          <div class="card-body">
            <div class="m-1">
              <label class="form-label" for="abc">Food Price</label>
              <input type="number" class="form-control" name="updateFoodPrice" value="{{ $food->price }}">
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="m-1">
              <label class="form-label" for="abc6">Product Description</label>
              <textarea class="form-control" name="updateFoodDesc" rows="3">
                {{ $food->description }}
              </textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-2">
        <input type="hidden" class="form-control" name="id" value="{{ $food->id }}">
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