@extends('layouts/homelayout')

@section('content')

<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="page-title">
            <h2>Feka Photography</h2>
          </div>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb pull-right">
            <li>
              <a href="#">Home</a>
            </li>
            <li class="active">Feka Photography</li>
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
                    <img src="{{ asset('img/products/signle-product/po1.jpeg') }}" height="460px">
                  </div>
                  <div class="carousel-item img-responsive text-center" data-thumb="1">
                    <img src="{{ asset('img/products/signle-product/po2.jpg') }}" height="460px">
                  </div>
                  <div class="carousel-item img-responsive text-center" data-thumb="2">
                    <img src="{{ asset('img/products/signle-product/po3.jpg') }}" height="460px">
                  </div>
                  <div class="carousel-item img-responsive text-center" data-thumb="3">
                    <img src="{{ asset('img/products/signle-product/po4.jpg') }}" height="460px">
                  </div>
                </div>
              </div>
              <div class="clearfix">
                <div id="thumbcarousel" class="carousel slide" data-interval="false">
                  <div class="carousel-inner">
                      <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{ asset('img/products/signle-product/po1.jpeg') }}"></div>
                      <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{ asset('img/products/signle-product/po2.jpg') }}"></div>
                      <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{ asset('img/products/signle-product/po3.jpg') }}"></div>
                      <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{ asset('img/products/signle-product/po4.jpg') }}"></div>
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
              <h2 id="nama-vendor">PROFESSIONAL PHOTOGRAPHER BY FEKA PHOTOGRAPHY</h2>
              <h6 class="text-muted">START FROM <span class="text-warning"> IDR 3.000.000 NETT</span></h6>
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
                <div class="tab-content text-center mt-5" id="deskripsi-vendor">
                  <div id="contacts" class="tab-pane fade show active ">
                    <p>- Professional Photographer for every types of event.<br>
                      - 2 Photographer and 1 Videographer<br>
                      - Included 5-15 photo frame, hard photo album, and Social media concultation<br>
                      - Tangerang Area, for location out of Jakarta City, transportation will be provided by clients
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