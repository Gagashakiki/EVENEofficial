@extends('admin.layouts.admin-main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0 text-dark">Blogs

        </h1>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Status</th>
              <th>{{ $firstName }}</th>
              <th>{{ $secondName }}</th>
              <th>Phone Number</th>
              <th>Profile Picture</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach($users as $list)
            <tr>
              <td>{{$list->id}}</td>
              <td>{{$list->email}}
              </td>
              <td>{{$list->status}}</td>
              <td>{{$list->nama1}}</td>
              <td>{{$list->nama2}}</td>
              <td>{{$list->notelp}}</td>
              <td><a href="{{url('img/avatar/'.$list->pict)}}" target="_blank">Thumbnail</a></td>
              <td>

                  <a href="#" class="delete btn btn-danger" data-id="{{$list->id}}" data-token="{{csrf_token()}}" data-toggle="tooltip" title="Delete Data">
                    <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            @endforeach


            </tbody>
            <tfoot>
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Status</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone Number</th>
              <th>Profile Picture</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    $(function () {
      $("#myTable").DataTable({
      });
    });
    $('.delete').click(function(){
      event.preventDefault();

        var me = $(this),
            url = me.attr('href');
            title = me.attr('title');
            csrf_token = me.attr('data-token');
            var id = me.attr('data-id');
        Swal.fire({
            title: 'Are you sure want to delete this user?',
            text: 'You can\'t Revert this!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/admin/deleteuser/"+id,
                    type: "DELETE",
                    dataType: "JSON",
                    data: {'id': id, '_method': 'DELETE', '_token': csrf_token},
                    success: function (response) {
                      Swal.fire({
                            type: 'success',
                            title: 'Success!',
                            text: 'Users Deleted!'
                        });
                    setTimeout(function(){
                      location.reload();
                  }, 2000);
                },
                    error: function (xhr) {
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        });
                    }
                });
            }
        });
    });

</script>
@endsection
