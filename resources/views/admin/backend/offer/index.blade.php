@extends('admin.dashboard')
@section('dashboard-body')
<div class="col-sm-12">
  <div class="card mb-3">
    <div class="card-header">
      <h5 class="card-title">Offer Table</h5>
    </div>
    <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Food category</th>
                <th scope="col" class="border">Menu</th>
                <th scope="col" class="border">Photo</th>
                <th scope="col" class="border">Edit</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            @php
              $offers = App\Models\TopOffer::get()
            @endphp

            @foreach($offers as $offer)
              <tbody>
                <tr class="text-center">
                  <td class="border">{{ $offer->id }}</td>
                  <td class="border">{{ $offer->foodcategory }}</td>
                  <td class="border">{{ $offer->menu }}</td>

                  <td class="border">
                    <img src="{{ asset($offer->photo) }}" alt="image" width="100" height="50">
                  </td>

                  <td class="border">
                    <a class="btn btn-info btn-sm" href="{{ route('offers.edit', $offer->id) }}">
                      <i class="ri-mark-pen-line"></i>
                    </a>
                  </td>
                  
                  <td class="border">
                    <a class="btn btn-danger btn-sm mb-1" href="{{ route('story.delete', $offer->id) }}">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            @endforeach
          </table>
        </div>
      </div>

      <a href="{{ route('offers.create'); }}" class="btn btn-primary my-2 py-2 px-3">Add Offer</a>
    </div>
  </div>
</div>
@endsection