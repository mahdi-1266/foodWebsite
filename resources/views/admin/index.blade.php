@extends('admin.dashboard')
@section('dashboard-body')
<div class="app-body">


  <!-- Row starts -->
  <div class="row gx-3">
 
    <div class="col-xxl-6 col-sm-9">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="card-title">Treatment Type</h5>
        </div>
        <div class="card-body">
          <div id="treatment"></div>
        </div>
      </div>
    </div>
 
    <div class="col-xxl-3 col-sm-3">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="card-title">Patients by Gender</h5>
        </div>
        <div class="card-body">
          <div class="auto-align-graph">
            <div id="genderAge"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Row ends -->

</div>
@endsection