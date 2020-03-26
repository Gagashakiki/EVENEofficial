@extends('admin.layouts.admin-main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0 text-dark">Blogs
            <span class="ml-3">
                <a href="{{url('admin/insertblog')}}" target="_blank" class="btn btn-success">
                    <i class="fas fa-plus mr-2"></i> New Post
                </a>
            </span>
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
              <th>Title</th>
              <th>Author</th>
              <th>Date</th>
              <th>Thumbnail</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach($blog as $list)
            <tr>
              <td>{{$list->id}}</td>
              <td>{{$list->judul}}
              </td>
              <td>{{$list->penulis}}</td>
              <td>{{\Carbon\Carbon::parse($list->tanggal)->format('d M Y')}}</td>
              <td><a href="{{url('img/blog/'.$list->thumbnail)}}" target="_blank">Thumbnail</a></td>
              <td>
                  <a href="{{url('admin/editblog/'.$list->id)}}" target="_blank" class="btn btn-warning" data-toggle="tooltip" title="Edit Data">
                      <i class="fas fa-pen"></i>
                  </a>
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
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Thumbnail</th>
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
            title: 'Are you sure want to delete this article?',
            text: 'You can\'t Revert it!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "deleteblog/"+id,
                    type: "DELETE",
                    dataType: "JSON",
                    data: {'id': id, '_method': 'DELETE', '_token': csrf_token},
                    success: function (response) {
                      Swal.fire({
                            type: 'success',
                            title: 'Success!',
                            text: 'Article Deleted!'
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
