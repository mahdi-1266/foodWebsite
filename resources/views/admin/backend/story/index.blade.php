@extends('admin.dashboard')
@section('dashboard-body')
<div class="col-sm-12">
  <div class="card mb-3">
    <div class="card-header">
      <h5 class="card-title">Story Table</h5>
    </div>
    <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Title</th>
                <th scope="col" class="border">Description</th>
                <th scope="col" class="border">Phone</th>
                <th scope="col" class="border">Photo1</th>
                <th scope="col" class="border">Photo2</th>
                <th scope="col" class="border">Edit</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            @php
              $stories = App\Models\Story::get()
            @endphp

            @foreach($stories as $story)
              <tbody>
                <tr class="text-center">
                  <td class="border">{{ $story->id }}</td>
                  <td class="border">{{ $story->title }}</td>
                  <td class="border">{{ $story->description }}</td>
                  <td class="border">{{ $story->phone }}</td>

                  <td class="border">
                    <img src="{{ asset($story->photo1) }}" alt="image" width="100" height="50">
                  </td>

                  <td class="border">
                    <img src="{{ asset($story->photo2) }}" alt="image" width="100" height="50">
                  </td>

                  <td class="border">
                    <a class="btn btn-info btn-sm" href="{{ route('story.edit', $story->id) }}">
                      <i class="ri-mark-pen-line"></i>
                    </a>
                  </td>
                  
                  <td class="border">
                    <a class="btn btn-danger btn-sm mb-1" href="{{ route('story.delete', $story->id) }}">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            @endforeach
          </table>
        </div>
      </div>

      <a href="{{ route('story.create'); }}" class="btn btn-primary my-2 py-2 px-3">Add Story</a>
    </div>
  </div>
</div>
@endsection