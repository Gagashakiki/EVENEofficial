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
                      @if($order->status == "Waiting For Payment")
                        <td>
                          <button class="btn btn-success btn-evene" data-toggle="modal" data-target="#paymentModal">
                            Pay Now
                          </button>
                        </td>
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

  <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel"
       aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="paymentModalLabel">Panduan Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Melalui ATM via Transfer
            <br/> Transfer pada Rekening resmi EVENE
          </p>

          <h3 class="mb-3">BCA : 2302626686 a.n <b>Gagas Hakiki</b></h3>

          <p>
            Pastikan nominal sesuai dengan harga tertera.
            <br/> Konfirmasi pemesanan dari pihak EVENE maks H+3 dari pemesanan.
          </p>
          <p>Lengkapnya Metode Pembayaran EVENE ada
            <a style="text-decoration:underline !important;" href="#">disini</a>
          </p>
        </div>
        <div class="modal-footer">
          <h4>Payment Confirmation : </h4>
          <div class="btn">
            <a href="https://api.whatsapp.com/send?phone=08xx" target="_blank"
               class="btn btn-primary btn-evene">
              <i class="fa fa-whatsapp fa-lg"></i>
              <small>via Whatsapp</small>
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=test@evene.com" target="_blank"
               class="btn btn-warning btn-default btn-evene" style="line-height:40px; height:40px;">
              <i class="fa fa-envelope fa-lg"></i>
              <small>via Email</small>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
