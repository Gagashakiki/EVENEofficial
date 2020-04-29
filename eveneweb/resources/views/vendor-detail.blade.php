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
                    <img src="{{ asset('img/vendor/'.$list->gambar1) }}" style="object-fit: contain" height="460px">
                  </div>
                  @if($list->gambar2)
                  <div class="carousel-item img-responsive text-center" data-thumb="1">
                    <img src="{{ asset('img/vendor/'.$list->gambar2) }}" style="object-fit: contain" height="460px">
                  </div>
                  @endif
                  @if($list->gambar3)
                  <div class="carousel-item img-responsive text-center" data-thumb="2">
                    <img src="{{ asset('img/vendor/'.$list->gambar3) }}" style="object-fit: contain" height="460px">
                  </div>
                  @endif
                  @if($list->gambar4)
                  <div class="carousel-item img-responsive text-center" data-thumb="3">
                    <img src="{{ asset('img/vendor/'.$list->gambar4) }}" style="object-fit: contain" height="460px">
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
              @if($profil)
              <form action="/ask-vendor" method="post">
                {{ csrf_field() }}
                <input type="hidden" value="{{$list->iduser}}" name="receiverUser">
                <input type="hidden" value="{{$profil->id}}" name="senderUser">
                <button type="submit" class="btn btn-primary btn-default mb-5 mt-2" style="border-radius: 12rem">
                  <i class="fa fa-comment"></i>
                  <small>Ask Vendor</small>
                </button>
              </form>
              @else
              <button class="btn btn-primary btn-default mb-5 mt-2" style="border-radius: 12rem" data-toggle="modal" href='.login-modal'>
                <i class="fa fa-comment"></i>
                <small>Ask Vendor</small>
              </button>
              @endif
{{--              <div class="btn mb-5">--}}
{{--                <a href="https://api.whatsapp.com/send?phone={{$list->notelp}}" target="_blank" class="btn btn-primary btn-default">--}}
{{--                    <i class="fa fa-whatsapp fa-lg"></i>--}}
{{--                    <small>Chat from Whatsapp</small>--}}
{{--                </a>--}}
{{--                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{$list->email}}" target="_blank" class="btn btn-warning btn-default">--}}
{{--                  <i class="fa fa-envelope fa-lg"></i>--}}
{{--                  <small>Contact Email</small>--}}
{{--              </a>--}}
{{--              </div>--}}
              <div>
                <ul class="nav nav-tabs" style="justify-content:start">
                  <li class="nav-item">
                    <a class="nav-link active" id="detail-tab" data-toggle="tab" role="tab" aria-selected="true" href="#vendor-detail">Detail</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="review-tab" data-toggle="tab" role="tab" aria-selected="false" href="#vendor-review">Review</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" role="tab" aria-selected="false" href="#vendor-contact">About Us</a>
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
                      <button id="btn-create-review" class="btn btn-success" data-toggle="modal" data-target="#reviewModal">
                        <i class="fa fa-plus"></i> Rating and Review
                      </button>
                      @endif
                      @if($reviews->count() == 0)
                        <div class="review-blank">
                          <h5>Review Tidak Ditemukan</h5>
                        </div>
                      @else
                        <div id="reviews">
                          @foreach($reviews as $review)
                            <div class="main-review">
                              <div class="avatar-review">
                                <img class="avatar" alt="Customer Avatar" src="{{asset('img/avatar/'.$review->user->pict)}}" width="50" height="50"/>
                              </div>

                              <div class="content-review">
                                <div class="content-review-header">
                                  <div>
                                    <h5>{{$review->user->nama1}}</h5>
                                    <p>{{date_format($review->created_at, "d F Y")}}</p>
                                  </div>
                                  <div>
                                    @for($i=0; $i<5; $i++)
                                      @if($i < floor($review->rating))
                                        <span class="fa fa-star checked"></span>
                                      @else
                                        <span class="fa fa-star"></span>
                                      @endif
                                    @endfor
                                  </div>
                                </div>
                                <div class="content-review-body">
                                  <b class="review-title">{{$review->title}}</b>
                                  <p>{{$review->review}}</p>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      @endif
                    </div>
                  </div>
                  <div class="tab-pane fade show" id="vendor-contact" role="tabpanel" aria-labelledby="contact-tab">
                    <ul>
                      <li><i class="fa fa-phone mr-2"></i> Whatsapp / Phone : +{{$list->notelp}}</li>
                      <li><i class="fa fa-envelope mr-2"></i> Email : {{$list->email}}</li>
                      <li><i class="fa fa-building mr-2"></i> Address : {{$list->alamat}}</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @if($profil)
  <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <h5 class="modal-title" id="reviewModalLabel">Review Vendor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formReview" action="{{url("/vendor/review")}}" method="post" role="form">
            {{ csrf_field() }}
            <div class="d-flex flex-column align-items-center">
              <h5 class="mb-2">Rate this Vendor</h5>
              <div class="mb-2" id="inputRating">
                <span class="rating-input fa fa-star" data-rating="1"></span>
                <span class="rating-input fa fa-star" data-rating="2"></span>
                <span class="rating-input fa fa-star" data-rating="3"></span>
                <span class="rating-input fa fa-star" data-rating="4"></span>
                <span class="rating-input fa fa-star" data-rating="5"></span>
                <input type="hidden" class="rating-value" name="rating"/>
              </div>
              <p class="font-italic">Press the star</p>
            </div>
            <div class="form-group required">
              <label class="control-label" for="title-review">Title Review</label>
              <input type="text" class="form-control" id="title-review" maxlength="50" name="titleReview" required/>
            </div>
            <div class="form-group required">
              <label class="control-label" for="input-review">Review</label>
              <textarea class="form-control" id="input-review" rows="3" maxlength="100" required name="review"></textarea>
            </div>
            <input type="hidden" name="vendorId" value="{{$list->id}}"/>

              <input type="hidden" name="userId" value="{{$profil->id}}" />
          </form>
        </div>
        <div class="modal-footer justify-content-center">
          <button disabled id="btnSubmitReview" type="button" class="btn btn-primary">Send Review</button>
        </div>
      </div>
    </div>
  </div>
  @endif
  @endforeach

  <script>
    jQuery(document).ready(function(){
      $('#btnSubmitReview').on('click', function() {
        if(validateReview()) {
          // $('#formReview').submit();
          console.log('submit');
        }


      });

      var validateReview = function () {
        return $('#input-review').val() && $('#title-review').val()
      };

      var $star_rating = $('#inputRating .fa');

      var SetRatingStar = function() {
        return $star_rating.each(function() {
          if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
            return $(this).addClass('checked')
          } else {
            return $(this).removeClass('checked');
          }
        });
      };

      $star_rating.on('click', function() {
        $star_rating.siblings('input.rating-value').val($(this).data('rating'));

        $('#btnSubmitReview').removeAttr('disabled');

        return SetRatingStar();
      });

    });
  </script>
  @endsection
