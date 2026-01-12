@extends('admin.dashboard')
@section('dashboard-body')
<div class="col-sm-12">
  <div class="card mb-3">
    <div class="card-header">
      <h5 class="card-title">Hero Table</h5>
    </div>
    <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Text</th>
                <th scope="col" class="border">Title</th>
                <th scope="col" class="border">Description</th>
                <th scope="col" class="border">Photo</th>
                <th scope="col" class="border">Edit</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            @php
              $contents = App\Models\HeroSection::get()
            @endphp

            @foreach($contents as $content)
              <tbody>
                <tr class="text-center">
                  <td class="border">{{ $content->id }}</td>
                  <td class="border">{{ $content->text }}</td>
                  <td class="border">{{ $content->title }}</td>
                  <td class="border">{{ $content->description }}</td>
                  <td class="border">
                    <img src="{{ $content->photo }}" alt="" width="100" height="50">
                  </td>
                  <td class="border border-2">
                    <a class="btn btn-info btn-sm" href="{{ route('edit.hero.section', $content->id); }}">
                      <i class="ri-mark-pen-line"></i>
                    </a>
                  </td>
                  <td class="border border-2">
                    <a class="btn btn-danger btn-sm mb-1" href="{{ route('delete.hero.section', $content->id); }}">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            @endforeach
          </table>
        </div>
      </div>

      <a href="{{ route('create.hero.section'); }}" class="btn btn-primary my-2 py-2 px-3">Add Food</a>
    </div>
  </div>
</div>
@endsection