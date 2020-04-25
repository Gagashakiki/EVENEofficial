@extends('layouts/homelayout')

@section('content')
  <!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix userProfile">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="btn-group" role="group" aria-label="...">
            @if(session()->get('profil')[0]->jenis == 'vendor')
              <a href="{{ url('/account/vendors') }}" class="btn btn-default active"><i class="fa fa-th" aria-hidden="true"></i>My Vendors</a>
              <a href="{{ url('/account/orders') }}" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>My Orders</a>
            @endif
            <a href="{{ url('/profile') }}" class="btn btn-default "><i class="fa fa-user"
                                                                        aria-hidden="true"></i>Profile</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="innerWrapper">
            <div class="orderBox">
              <div class="d-flex flex-row">
                <h2 class="mr-3">Vendor List</h2>
                <a href="{{ url('/account/vendors/create') }}"
                   class="btn btn-success"><i class="fa fa-plus mr-1"></i> Create new vendor</a>
              </div>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                  <tr>
                    <th>Vendor ID</th>
                    <th>Vendor Name</th>
                    <th>Contacts</th>
                    <th>Start Price</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($vendor as $vendor)
                    <tr>
                      <td>#{{$vendor->id}}</td>
                      <td>{{$vendor->nama}}</td>
                      <td>+62 {{$vendor->notelp}} <br> {{$vendor->email}}</td>
                      <td>Rp. {{number_format($vendor->harga)}}</td>
                      <td>{{$vendor->status}}</td>
                      <td><span><a href="{{ url('/account/vendors/edit/'.$vendor->id) }}"
                                   class="btn btn-sm btn-secondary-outlined"> View/Edit</a>
                                            <button
                                              class="hapus" style="background-color: red;
                                                  border: none;
                                                  color: white;

                                                  text-align: center;
                                                  text-decoration: none;
                                                  display: inline-block;
                                                  font-size: 13px;
                                                  padding: 0px;
                                                  width: 80px;
                                                  font-weight: 700;
                                                  height: 40px;
                                                  line-height: 40px;
                                                  cursor: pointer;" href="{{url('/account/vendors')}}"
                                              data-id="{{ $vendor->id }}" data-token="{{csrf_token()}}"
                                            > Delete</button></span></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.hapus').click(function () {
      event.preventDefault();

      var me = $(this),
      url = me.attr('href');
      title = me.attr('title');
      csrf_token = me.attr('data-token');
      var id = me.attr('data-id');
      Swal.fire({
        title: 'Are you sure want to delete this?',
        text: 'You won\'t be able to revert this!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url: '/account/vendors/delete/' + id,
            type: 'DELETE',
            dataType: 'JSON',
            data: { 'id': id, '_method': 'DELETE', '_token': csrf_token },
            success: function (response) {
              $('.table-responsive').load(url + ' .table');
              $('script').load(url + ' .table-responsive');
              setTimeout(function () {
                Swal.fire({
                  type: 'success',
                  title: 'Success!',
                  text: 'Data has been deleted!'
                });
              }, 500);
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
