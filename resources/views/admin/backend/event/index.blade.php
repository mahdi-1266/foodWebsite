@extends('admin.dashboard')
@section('dashboard-body')
<div class="col-sm-12">
  <div class="card mb-3">
    <div class="card-header">
      <h5 class="card-title">Events</h5>
    </div>
    <div class="card-body">
      <div class="table-outer">
        <div class="table-responsive">
          <table class="table align-middle table-hover m-0 truncate">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col" class="border">#</th>
                <th scope="col" class="border">Text</th>
                <th scope="col" class="border">Description</th>
                <th scope="col" class="border">Date</th>
                <th scope="col" class="border">Photo</th>
                <th scope="col" class="border">Edit</th>
                <th scope="col" class="border">Delete</th>
              </tr>
            </thead>

            @php
              $events = App\Models\Event::get()
            @endphp

            @foreach($events as $event)
              <tbody>
                <tr class="text-center">
                  <td class="border border-2">{{ $event->id }}</td>
                  <td class="border border-2">{{ $event->text }}</td>
                  <td class="border border-2">{{ $event->description }}</td>
                  <td class="border border-2">{{ $event->date }}</td>
                  <td class="border border-2">
                    <img src="{{ $event->photo }}" height="50px" width="100px" alt="Image">
                  </td>
                  <td class="border border-2">                   
                    <a class="btn btn-info btn-sm" href=" {{ route('event.edit', $event->id); }}">
                      <i class="ri-mark-pen-line"></i>
                    </a>
                  </td>

                  <td class="border border-2">
                    <a class="btn btn-danger btn-sm mb-1" href="{{ route('event.delete', $event->id); }}">
                      <i class="ri-delete-bin-line"></i>
                    </a>
                  </td>
                </tr>              
            </tbody>
            @endforeach

            
          </table>
        </div>
      </div>

      <a href="{{ route('event.create') }}" class="btn btn-primary my-2 py-2 px-3">Add Choice</a>
    </div>
  </div>
</div>
@endsection