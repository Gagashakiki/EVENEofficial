@extends('layouts/homelayout')

@section('content')

<!-- LIGHT SECTION -->
@foreach($list as $list)
<section class="lightSection clearfix pageHeader">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="page-title">
            <h2>{{$list->nama}}</h2>
          </div>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb pull-right">
            <li>
              <a href="#">Home</a>
            </li>
            <li class="active">{{$list->nama}}</li>
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
                    <img src="{{ asset('img/vendor/'.$list->gambar1) }}" height="460px">
                  </div>
                  @if($list->gambar2)
                  <div class="carousel-item img-responsive text-center" data-thumb="1">
                    <img src="{{ asset('img/vendor/'.$list->gambar2) }}" height="460px">
                  </div>
                  @endif
                  @if($list->gambar3)
                  <div class="carousel-item img-responsive text-center" data-thumb="2">
                    <img src="{{ asset('img/vendor/'.$list->gambar3) }}" height="460px">
                  </div>
                  @endif
                  @if($list->gambar4)
                  <div class="carousel-item img-responsive text-center" data-thumb="3">
                    <img src="{{ asset('img/vendor/'.$list->gambar4) }}" height="460px">
                  </div>
                  @endif
                </div>
              </div>
              <div class="clearfix">
                <div id="thumbcarousel" class="carousel slide" data-interval="false">
                  <div class="carousel-inner">
                      <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="{{ asset('img/vendor/'.$list->gambar1) }}"></div>
                      @if($list->gambar2)
                      <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{ asset('img/vendor/'.$list->gambar2) }}"></div>
                      @endif
                      @if($list->gambar3)
                      <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{ asset('img/vendor/'.$list->gambar3) }}"></div>
                      @endif
                      @if($list->gambar4)
                      <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{ asset('img/vendor/'.$list->gambar4) }}"></div>
                      @endif
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
              <h2 id="nama-vendor">{{strtoupper($list->judul)}}</h2>
              <h6 class="text-muted">START FROM <span class="text-warning"> Rp. {{number_format($list->harga)}} NETT </span></h6>
              <div class="btn mb-5">
                <a href="https://api.whatsapp.com/send?phone={{$list->notelp}}" target="_blank" class="btn btn-primary btn-default">
                    <i class="fa fa-whatsapp fa-lg"></i>
                    <small>Chat from Whatsapp</small>
                </a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$list->email}}" target="_blank" class="btn btn-warning btn-default">
                  <i class="fa fa-envelope fa-lg"></i>
                  <small>Contact Email</small>
              </a>
              </div>
              <div class="tabArea">
                <ul class="nav nav-tabs bar-tabs">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#contacts">Detail</a></li>
                </ul>
                <div class="coba">
                    {!!$list->detail!!}

                  </div>
                  <ul class="garis">Hubungi kami :</ul>
              <li>Whatsapp / Phone : +{{$list->notelp}}</li>
              <li>Email : {{$list->email}}</li>
              <li>Company Address : {{$list->alamat}}</li>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  @endsection
