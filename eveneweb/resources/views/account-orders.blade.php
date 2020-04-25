@extends('layouts/homelayout')

@section('content')
  <!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix userProfile">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="btn-group" role="group" aria-label="...">
            @if(session()->get('profil')[0]->jenis == 'vendor')
              <a href="{{ url('/account/vendors') }}" class="btn btn-default"><i class="fa fa-th" aria-hidden="true"></i>My Vendors</a>
              <a href="{{ url('/account/orders') }}" class="btn btn-default active"><i class="fa fa-list" aria-hidden="true"></i>My Orders</a>
            @endif
            <a href="{{ url('/profile') }}" class="btn btn-default "><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="innerWrapper">
            <div class="orderBox">
              <h2 class="mr-3">My Orders</h2>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Type</th>
                    <th>Theme</th>
                    <th>Date</th>
                    <th>Note</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($orders as $order)
                    <tr>
                      <td>{{ $order->customerName }}</td>
                      <td>{{ $order->type }}</td>
                      <td>{{ $order->theme }}</td>
                      <td>{{ date("d F Y", strtotime($order->date)) }}</td>
                      <td>{{ $order->notes }}</td>
                      <td>{{ number_format($order->amount) }}</td>
                      <td>{{ $order->status }}</td>
                      @if($order->status = "Menunggu Pembayaran")
                        <td>No Action</td>
                      @else
                        <td></td>
                      @endif
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
@endsection
