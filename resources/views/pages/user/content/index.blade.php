@extends('layouts.main')

@section('page-content')
    <div class="card">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <a class="btn btn-primary" href="{{url('/content/create')}}">Add Content</a>
        </div>

        <div class="card-body">
            <div class="table-responsive dataview">
                <table class="table dashboard-expired-products">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Page Id</th>
                            <th>Location Id</th>
                            <th>Language Id</th>
                            <th>Header</th>
                            <th>Text</th>
                            <th>Pic 1</th>
                            <th>Pic 2</th>
                            <th>Pic 3</th>
                            <th>Status</th>
                            <th class="no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contents as $content)
                            <tr>
                                <td>{{ $content->id }}</td>
                                <td>{{ $content->page_id }}</td>
                                <td>{{ $content->location_id }}</td>
                                <td>{{ $content->language_id }}</td>
                                <td>{{ $content->header }}</td>
                                <td>{{ $content->text }}</td>
                                <td><img src="{{ asset($content->pic_1) }}" alt="Image" style="max-width: 100px; height: auto;"></td>
                                <td><img src="{{ asset($content->pic_2) }}" alt="Image" style="max-width: 100px; height: auto;"></td>
                                <td><img src="{{ asset($content->pic_3) }}" alt="Image" style="max-width: 100px; height: auto;"></td>
                                <td>{{ $content->status }}</td>
                                <td class="action-table-data">
                                    <div class="edit-delete-action btn-group">
                                        <a class="btn btn-primary" href="{{url("content/{$content->id}")}}">Show</a>
                                        <a class="btn btn-success" href="{{url("content/$content->id/edit")}}">Edit</a>
                                        <a class="btn btn-info" href="{{url("content/delete/$content->id")}}">Delete</a>

                                        {{-- <form action="{{url("hrm_status/{$data['id']}")}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div class="d-flex justify-content-end mt-4">
                                                <button type="submit" class="btn btn-danger px-4"
                                                    onclick="return confirm('Are you sure you want to delete this customer? This action cannot be undone!');">
                                                    Yes, Delete
                                                </button>
                                                <a class="confirm-text p-2" href="">
                                                    <i data-feather="trash-2" class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
