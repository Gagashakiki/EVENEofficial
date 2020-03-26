@extends('admin.layouts.admin-main')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0 text-dark">Vendors</h1>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <table id="inspirationTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Whatsapp</th>
              <th>Nama</th>
              <th>Jenis</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach($order as $order)
            <tr>
              <td>#{{$order->id}}</td>
              <td>{{$order->email}}</td>
              <td>+{{$order->notelp}}</td>
              <td>{{$order->nama}}</td>
              <td>{{$order->jenis}}</td>
              <td>Rp. {{number_format($order->harga)}},-</td>
              <td>
                  <button href="{{url('admin/vendor')}}" data-id="{{ $order->id }}" data-token="{{csrf_token()}}" class="approve btn btn-warning" title="Approve">
                      <i class="fas fa-check"></i>
                  </button>
                  <button href="#" class="delete btn btn-danger" data-id="{{ $order->id }}" data-token="{{csrf_token()}}" title="Reject">
                    <i class="fas fa-times"></i>
                </button>
              </td>
            </tr>
            @endforeach



            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Whatsapp</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    $(function () {
      $("#inspirationTable").DataTable({
      });
    });
    $('.delete').click(function(){
    	event.preventDefault();

        var me = $(this),
            url = me.attr('href');
            title = me.attr('title');
            csrf_token = me.attr('data-token');
    				var id = me.attr('data-id');
    				console.log(id);
            console.log(url);
        Swal.fire({
            title: 'Are you sure want to Reject?',
            text: 'You can\'t Revert it!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Reject it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "deletevendor/"+id,
                    type: "DELETE",
                    dataType: "JSON",
                    data: {'id': id, '_method': 'DELETE', '_token': csrf_token},
                    success: function (response) {
                      Swal.fire({
                            type: 'success',
                            title: 'Success!',
                            text: 'Vendor Rejected!'
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

    $('.approve').click(function(){
    	event.preventDefault();

        var me = $(this),
            url = me.attr('href');
            title = me.attr('title');
            csrf_token = me.attr('data-token');
    				var id = me.attr('data-id');
    				console.log(id);
            console.log(url);
        Swal.fire({
            title: 'Are you sure want to Approve?',
            text: 'You can Reject it later',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Approve it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "approve/"+id,
                    type: "get",
                    dataType: "JSON",
                    data: {'id': id, '_method': 'get', '_token': csrf_token},
                    success: function (response) {
                      Swal.fire({
                            type: 'success',
                            title: 'Success!',
                            text: 'Vendor Approved!'
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
