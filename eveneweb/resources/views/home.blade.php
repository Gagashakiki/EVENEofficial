@extends('layouts.homelayout')

@section('content')
<!-- BANNER -->
<div class="bannercontainer bannerV1">
    <div class="fullscreenbanner-container">
      <div class="fullscreenbanner">
        <ul>
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
            <img src="img/home/banner-slider/foto-Birthday.png" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
            <div class="slider-caption slider-captionV1 container">

              {{-- <div class="tp-caption rs-caption-1 sft start"
                data-hoffset="0"
                data-x="700"
                data-y="0"
                data-speed="800"
                data-start="1500"
                data-easing="Back.easeInOut"
                data-endspeed="300" >
                <img src="img/home/banner-slider/slide1.png" alt="slider-image" style="width: auto; height: auto;">
              </div> --}}

              <div class="tp-caption rs-caption-2 sft"
                data-hoffset="0"
                data-y="300"
                data-x="[15,15,42,15]"
                data-speed="800"
                data-start="2000"
                data-easing="Back.easeInOut"
                data-endspeed="300">
                <b>EVERYONE</b><br>
                <span style="color:white">can Celebrate Their<br>
                <b>Birthday Party</b></span>


              </div>

              {{-- <div class="tp-caption rs-caption-3 sft"
                data-hoffset="0"
                data-y="175"
                data-x="[15,15,42,15]"
                data-speed="1000"
                data-start="3000"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off">
                <small>Everyone can celebrate their Birthday Party</small>
              </div> --}}
              <div class="tp-caption rs-caption-4 sft"
                data-hoffset="0"
                data-y="300"
                data-x="[15,15,42,15]"
                data-speed="800"
                data-start="3500"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off">
                <span class="page-scroll">
                  <a href="/vendor/all" style="width:20rem" class="btn primary-btn">Start Your Journey Here<i class="fa fa-chevron-right"></i></a>
                </span>
              </div>
            </div>
          </li>
          <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 2">
            <img src="img/home/banner-slider/foto-bridal-shower.png" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
            <div class="slider-caption slider-captionV1 container">
              {{-- <div class="tp-caption rs-caption-1 sft start"
                data-hoffset="0"
                data-y="0"
                data-x="[15,15,42,15]"
                data-speed="800"
                data-start="1500"
                data-easing="Back.easeInOut"
                data-endspeed="300">
                <img src="img/home/banner-slider/sl2.png" alt="slider-image">
              </div> --}}

              <div class="tp-caption rs-caption-2 sft "
                data-hoffset="0"
                data-y="50"
                data-x="620"
                data-speed="800"
                data-start="2000"
                data-easing="Back.easeInOut"
                data-endspeed="300">
                <b>SHARE</b> <br>
                <span style="color:white">Your Joy and Laugh<br>
                With Your Bestie<br>
                Through<br>
                <b>BRIDAL SHOWER</b></span>
              </div>

              {{-- <div class="tp-caption rs-caption-3 sft"
                data-hoffset="0"
                data-y="175"
                data-x="600"
                data-speed="1000"
                data-start="3000"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off">
                Start From - $259.00 <br>

              </div> --}}

              <div class="tp-caption rs-caption-4 sft"
                data-hoffset="0"
                data-y="370"
                data-x="620"
                data-speed="800"
                data-start="3500"
                data-easing="Power4.easeOut"
                data-endspeed="300"
                data-endeasing="Power1.easeIn"
                data-captionhidden="off">
                <span class="page-scroll"><a href="/vendor/all" style="width:20rem" class="btn primary-btn">Start Your Journey Here<i class="fa fa-chevron-right"></i></a></span>
              </div>
            </div>
          </li>
          {{-- <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 3">
              <img src="img/home/banner-slider/slider-bg.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption slider-captionV1 container">

                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-x="450"
                  data-y="54"
                  data-speed="800"
                  data-start="1500"
                  data-easing="Back.easeInOut"
                  data-endspeed="300" >
                  <img src="img/home/banner-slider/shoe1.png" alt="slider-image" style="width: 781px; height: 416px;">
                </div>

                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="100"
                  data-x="[15,15,42,15]"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  Canvas Sneaker
                </div>

                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="175"
                  data-x="[15,15,42,15]"
                  data-speed="1000"
                  data-start="3000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  Start From - $259.00 <br>
                  <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis turpis pharetra pretium nec eu sem.</small>
                </div>
                <div class="tp-caption rs-caption-4 sft"
                  data-hoffset="0"
                  data-y="310"
                  data-x="[15,15,42,15]"
                  data-speed="800"
                  data-start="3500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><a href="#" class="btn primary-btn">Read More<i class="fa fa-chevron-right"></i></a></span>
                </div>
              </div>
            </li> --}}
        </ul>
      </div>
    </div>
  </div>

  <!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix">
    <div class="container">

      <div class="page-header">
        <h4>Featured Vendors</h4>
      </div>

      <div class="row featuredCollection margin-bottom">
        <div class="col-md-4 col-12">
          <div class="thumbnail" onclick="location.href='/vendor/all/eventorganizer';">
            <div class="imageWrapper">
              <img src="img/home/featured-collection/featured-event-organizer.png" alt="feature-collection-image">
              <div class="caption">
                  <h3>Event Organizer</h3>
                  @foreach($priceeo as $priceeo)
                  <small>Start From Rp. {{number_format($priceeo->sprice)}},-</small>
                  @endforeach
              </div>
              <div class="masking">
                <a href="{{url('/vendor/all/eventorganizer')}}" class="btn viewBtn">View All Vendors</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="thumbnail" onclick="location.href='/vendor/all/tabledecoration';">
            <div class="imageWrapper">
              <img src="img/home/featured-collection/featured-table-decor.png" alt="feature-collection-image">
              <div class="caption">
                  <h3>Table Decoration</h3>
                  @foreach($pricetd as $pricetd)
                  <small>Start From Rp. {{number_format($pricetd->sprice)}},-</small>
                  @endforeach
              </div>
              <div class="masking">
                <a href="{{url('/vendor/all/tabledecoration')}}" class="btn viewBtn">View All Vendors</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="thumbnail" onclick="location.href='/vendor/all/photographer';">
            <div class="imageWrapper">
              <img src="img/home/featured-collection/featured-photographer.png" alt="feature-collection-image">
              <div class="caption">
                  <h3>Photographer</h3>
                  @foreach($priceph as $priceph)
                  <small>Start From Rp. {{number_format($priceph->sprice)}},-</small>
                  @endforeach
              </div>
              <div class="masking">
                <a href="{{url('/vendor/all/photographer')}}" class="btn viewBtn">View All Vendors</a>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="thumbnail" onclick="location.href='/vendor/all/makeupartist';">
            <div class="imageWrapper">
              <img src="img/home/featured-collection/make.jpg" alt="feature-collection-image">
              <div class="caption">
                  <h3>Make Up Artist</h3>
                  <small>Start From </small>
                  @foreach($pricemu as $pricemu)
                    <small>Rp. {{number_format($pricemu->sprice)}},-</small>
                    @endforeach
              </div>
              <div class="masking">
                <a href="{{url('/vendor/all')}}" class="btn viewBtn">View All Vendors</a>
              </div>
            </div>

          </div>
        </div>
      </div>

      {{-- <div class="page-header">
        <h4>Featured Products</h4>
      </div>

      <div class="row featuredProducts featuredProductsSlider margin-bottom">
        <div class="slide col-md-3">
          <div class="productImage clearfix">
            <img src="img/home/featured-product/product-01.jpg" alt="featured-product-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption clearfix">
            <a href="single-product.html">
              <h4>Nike Sportswear</h4>
            </a>
            <h3>$199.00</h3>
          </div>
        </div>
        <div class="slide col-md-3">
          <div class="productImage">
            <img src="img/home/featured-product/product-02.jpg" alt="featured-product-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption">
            <a href="single-product.html">
              <h4>Dip Dyed Sweater</h4>
            </a>
            <h3>$149.00</h3>
          </div>
        </div>
        <div class="slide col-md-3">
          <div class="productImage">
            <img src="img/home/featured-product/product-03.jpg" alt="featured-product-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption">
            <a href="single-product.html">
              <h4>Scarf Ring Corner</h4>
            </a>
            <h3>$79</h3>
          </div>
        </div>
        <div class="slide col-md-3">
          <div class="productImage">
            <img src="img/home/featured-product/product-04.jpg" alt="featured-product-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption">
            <a href="single-product.html">
              <h4>Sun Buddies</h4>
            </a>
            <h3>$109</h3>
          </div>
        </div>
        <div class="slide col-md-3">
          <div class="productImage">
            <img src="img/home/featured-product/product-05.jpg" alt="featured-product-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption">
            <a href="single-product.html">
              <h4>Scarf Ring Corner</h4>
            </a>
            <h3>$79</h3>
          </div>
        </div>
        <div class="slide col-md-3">
          <div class="productImage">
            <img src="img/home/featured-product/product-06.jpg" alt="featured-product-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption">
            <a href="single-product.html">
              <h4>Scarf Ring Corner</h4>
            </a>
            <h3>$79</h3>
          </div>
        </div>
        <div class="slide col-md-3">
          <div class="productImage">
            <img src="img/home/featured-product/product-07.jpg" alt="featured-product-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption">
           <a href="single-product.html">
              <h4>Scarf Ring Corner</h4>
            </a>
            <h3>$79</h3>
          </div>
        </div>
        <div class="slide col-md-3">
          <div class="productImage">
            <img src="img/home/featured-product/product-09.jpg" alt="featured-product-img">
            <div class="productMasking">
              <ul class="list-inline btn-group" role="group">
                <li><a class="btn btn-default btn-wishlist"><i class="fa fa-heart-o"></i></a></li>
                <li><a href="javascript:void(0)" class="btn btn-default" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" class="btn btn-default"><i class="fa fa-shopping-basket"></i></a></li>
                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="productCaption">
           <a href="single-product.html">
              <h4>Scarf Ring Corner</h4>
            </a>
            <h3>$79</h3>
          </div>
        </div>
      </div> --}}

      <div class="page-header">
        <h4>Latest Articles</h4>
      </div>
      <div class="row latestArticles">
        @foreach($list as $list)
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="{{ url('/blog/'.$list->id) }}" target="_blank">
              <img src="img/blog/{{$list->thumbnail}}" alt="article-image" style="object-fit: contain;">
            </a>
            <h5><a href="{{ url('/blog/'.$list->id) }}">{{$list->judul}}</a></h5>
            {{-- <span class="meta"> by <a class="pr-1" href="#">{{$list->penulis}}</a> / <a class="pl-1" href="blog-single-right-sidebar.html">3 Comments</a></span> --}}
          </div>
        </div>
        @endforeach
        </div>
    </div>
  </section>

  @endsection
