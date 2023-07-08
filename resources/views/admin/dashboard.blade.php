@extends('layout.master')

@section('title')
    STUDENTS
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if (Session::has('success'))
                        <p style="color: green;">
                            {{ Session::get('success') }}
                        </p>
                    @endif
                    <h4 class="card-title">Manage Studnets</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr class="">
                                    <th>SL#</th>
                                    <th>Profile Picture</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($collection as $item)
                                <tbody>
                                    <tr>
                                        <td> </td>
                                        <td><img src="{{ url('uploads/profilepic/' . $item->image) }}" alt="Profile"
                                                class="rounded-circle shadow-4-strong" width="100">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            <a href="api/change?id={{ $item->id }}"><button
                                                    class="btn btn-info">{{ $item->status }}</button></a>
                                        </td>
                                        <td>
                                            <a href="edit_profile?id={{ $item->id }}"><button
                                                    class="btn btn-success">Edit</button></a>
                                            <input type="hidden" value="{{ $item->id }}" class="delete_id">
                                            <button class="delete_confirm btn btn-danger">Delete</button></>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.delete_confirm').click(function(e) {
                e.preventDefault();
                var tr = $(this).parent().parent();
                var id = tr.find('.delete_id').val();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type: "DELETE",
                                url: "delete",
                                data: {
                                    id: id,
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function(response) {
                                    swal("Your data has been deleted!", {
                                        icon: "success",
                                    }).then((willDelete) => {
                                        location.reload();
                                    });
                                }
                            });
                        }
                    });
            });
        });
    </script>
@endsection
