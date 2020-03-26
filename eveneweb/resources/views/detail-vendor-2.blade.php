@extends('layouts/homelayout')

@section('content')

<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="page-title">
            <h2>Orange Organizer</h2>
          </div>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb pull-right">
            <li>
              <a href="#">Home</a>
            </li>
            <li class="active">Orange Organizer</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix">
    <div class="container">
      <div class="row singleProduct">
        <div class="col-md-12">
          <div class="media flex-wrap">
            <div class="media-left productSlider">
              <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active img-responsive" data-thumb="0">
                    <img src="{{ asset('img/products/signle-product/eo1.jpg') }}" height="460px">
                  </div>
                  <div class="carousel-item img-responsive text-center" data-thumb="1">
                    <img src="{{ asset('img/products/signle-product/eo2.jpg') }}" height="460px">
                  </div>
                  <div class="carousel-item img-responsive text-center" data-thumb="2">
                    <img src="{{ asset('img/products/signle-product/eo3.jpg') }}" height="460px">
                  </div>
                  <div class="carousel-item img-responsive text-center" data-thumb="3">
                    <img src="{{ asset('img/products/signle-product/eo4.jpg') }}" height="460px">
                  </div>
                </div>
              </div>
              <div class="clearfix">
                <div id="thumbcarousel" class="carousel slide" data-interval="false">
                  <div class="carousel-inner">
                      <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{ asset('img/products/signle-product/eo1.jpg') }}"></div>
                      <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{ asset('img/products/signle-product/eo2.jpg') }}"></div>
                      <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{ asset('img/products/signle-product/eo3.jpg') }}"></div>
                      <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{ asset('img/products/signle-product/eo4.jpg') }}"></div>
                  </div>
                  <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="media-body">
              <h2 id="nama-vendor">SWEET 17 ORGANIZER BY ORANGE ORGANIZER</h2>
              <h6 class="text-muted">START FROM <span class="text-warning">IDR 10.000.000 NETT</span></h6>
              <p></p>

              <div class="btn mb-5">
                <a href="https://api.whatsapp.com/send?phone=6285955566623" target="_blank" class="btn btn-primary btn-default">
                    <i class="fa fa-whatsapp fa-lg"></i>
                    <small>Chat from Whatsapp</small>
                </a>
                <a href="https://api.whatsapp.com/send?phone=6285955566623" target="_blank" class="btn btn-warning btn-default">
                  <i class="fa fa-envelope fa-lg"></i>
                  <small>Contact To Email</small>
              </a>
              </div>
              <div class="tabArea">
                <ul class="nav nav-tabs bar-tabs">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#contacts">Detail</a></li>
                </li>
                <div class="tab-content text-center mt-3" id="deskripsi-vendor">
                  <div id="contacts" class="tab-pane fade show active">
                    <p>1. Directing and giving advices for well prepared and smooth.<br>
                      2. Providing information and discussing all things needed refer to the event of the client.<br> 
                      3. Ensuring the committee and duties for each committee members.<br>
                      4. Ensuring all committee duty at the event.<br>
                      5. Budgeting Consultation and Discussion<br>
                      6. Finalizing and implementing rundown at the D'day<br>
                      7. Coordinating technical meeting, between supplier & client, also with the committee if needed. 8. Providing minimum 8 (eight) crew members for conducting the event on D'day or refer to the event's scale with detail job function as follow: Floor Manager, Assistant MC, Assistant F&B, Checker, Butler and Stopper.<br>
                      Bonus:<br>
                       1. Confetti shoots for candle wishes<br>
                      2. Fresh flower rose local for Handbouquet and boutonnierre 4. 2 dozen artificial flower for family corsages Free Borrowing: 1. Teapay set 2. Angpao Box 3. Basket for mingle in reception 4. Basket for flower girls 5. 15 pieces Photo frame size 4R
                      </p>
                    </ul>
                  </div>
                  <ul>Hubungi kami :</ul>
                  <li>Whatsapp / Phone : +6285955566623</li>
                  <li>Email : celinekes@gmail.com</li>
                  <li>Company Address : Jl Graha, Kec. Medan, Kel. Bebas, Ibukota Baru - Kalimantan. xxxxxx.</li>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection