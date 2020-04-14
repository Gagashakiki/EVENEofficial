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
              <div>
                <ul class="nav nav-tabs" style="justify-content:start">
                  <li class="nav-item">
                    <a class="nav-link active" id="detail-tab" data-toggle="tab" role="tab" aria-selected="true" href="#vendor-detail">Detail</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="review-tab" data-toggle="tab" role="tab" aria-selected="false" href="#vendor-review">Review</a>
                  </li>
                </ul>
                <div class="tab-content" id="vendorDetailTab">
                  <div class="tab-pane fade show active" id="vendor-detail" role="tabpanel" aria-labelledby="detail-tab">
                    <div>
                      {!!$list->detail!!}
                    </div>
                  </div>
                  <div class="tab-pane fade show" id="vendor-review" role="tabpanel" aria-labelledby="review-tab">
                    <div>
                      @if($profil)
                      <button id="btn-create-review" class="btn btn-success"><i class="fa fa-plus"></i> Rating and Review</button>
                      @endif
                      <div class="main-review">
                        <div class="avatar-review">
                          <img class="avatar" alt="Customer Avatar" src="{{asset("img/avatar/default-photo.jpg")}}" width="50" height="50"/>
                        </div>
                        <div class="content-review">
                          <div class="content-review-header">
                            <div>
                              <h5>Kevin</h5>
                              <p>14 April 2020</p>
                            </div>
                            <div>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                          </div>
                          <div class="content-review-body">
                            <b class="review-title">Judul Review</b>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In laboriosam laborum praesentium quaerat totam. Assumenda, atque commodi dolor ea earum est, harum minus mollitia nulla obcaecati recusandae saepe sequi veritatis?</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <h6>Hubungi kami :</h6>
              <ul>
                <li>Whatsapp / Phone : +{{$list->notelp}}</li>
                <li>Email : {{$list->email}}</li>
                <li>Company Address : {{$list->alamat}}</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  @endsection
