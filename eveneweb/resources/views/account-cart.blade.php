@extends('layouts/homelayout')

@section('content')
  <!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix userProfile">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="innerWrapper">
            <div class="orderBox">
              <h2 class="mr-3"><i class="fa fa-shopping-cart"></i> Shopping Cart</h2>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                  <tr>
                    <th>Transaction Id</th>
                    <th>Vendor Name</th>
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
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->vendorName }}</td>
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
