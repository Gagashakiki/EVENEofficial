@extends('layouts/homelayout')

@section('content')

<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="page-title">
            <h2>Vendors</h2>
          </div>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb float-right">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
            <a href="{{url('/vendor/all')}}">Vendors</a>
            </li>
            <li class="active">{{$jenis ?? ''}}</li>
            <li class="active">{{$tipe ?? ''}}</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix productsContent">
    <div class="container">
      @if(!empty($query))
      <h2 style="color:#797979; margin-bottom:1%;">Search Result for "{{$query}}" ( {{$count}} Results )</h2>
      @endif
      <div class="row">
        <div class="col-lg-3 col-md-4 sideBar">
          <div class="panel panel-default">
            <div class="panel-heading">View By</div>
            <div class="panel-body">
              <div class="collapse navbar-collapse navbar-ex1-collapse navbar-side-collapse">
                <ul class="nav navbar-nav side-nav">
                  <li>
                    <a href="javascript:;" data-toggle="collapse" aria-expanded="true" data-target="#event">Events<i class="fa fa-plus"></i></a>
                    <ul id="event" class="collapse collapseItem show">
                      <li><a href="{{url('vendor/weddingparty')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Wedding Party </a></li>
                      <li><a href="{{url('vendor/sweet17')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Sweet 17 </a></li>
                      <li><a href="{{url('vendor/bridalshower')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Bridal Shower </a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript:;" data-toggle="collapse" aria-expanded="false" data-target="#vendor">Vendors<i class="fa fa-plus"></i></a>
                    <ul id="vendor" class="collapse collapseItem">
                      <li><a href="{{url('vendor/all/eventorganizer')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Event Organizer </a></li>
                      <li><a href="{{url('vendor/all/tabledecoration')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Table Decoration </a></li>
                      <li><a href="{{url('vendor/all/Photographer')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Photographer </a></li>
                      <li><a href="{{url('vendor/all/makeupartist')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Make up Artist </a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          {{-- <div class="panel panel-default priceRange">
            <div class="panel-heading">Filter by Price</div>
            <div class="panel-body clearfix">
              <div class="price-slider-inner">
                <span class="amount-wrapper">
                  Price:
                  <input type="text" id="price-amount-1" readonly>
                  <strong>-</strong>
                  <input type="text" id="price-amount-2" readonly>
                </span>
                <div id="price-range"></div>
              </div>
              <input class="btn-default" type="submit" value="Filter">
              <!-- <span class="priceLabel">Price: <strong>$12 - $30</strong></span> -->
            </div>
          </div>
          <div class="panel panel-default filterNormal">
            <div class="panel-heading">filter by Color</div>
            <div class="panel-body">
              <ul class="list-unstyled">
                <li><a href="#">Black<span>(15)</span></a></li>
                <li><a href="#">White<span>(10)</span></a></li>
                <li><a href="#">Red<span>(7)</span></a></li>
                <li><a href="#">Blue<span>(12)</span></a></li>
                <li><a href="#">Orange<span>(12)</span></a></li>
              </ul>
            </div>
          </div>
          <div class="panel panel-default filterNormal">
            <div class="panel-heading">filter by Size</div>
            <div class="panel-body">
              <ul class="list-unstyled clearfix">
                <li><a href="#">Small<span>(15)</span></a></li>
                <li><a href="#">Medium<span>(10)</span></a></li>
                <li><a href="#">Large<span>(7)</span></a></li>
                <li><a href="#">Extra Large<span>(12)</span></a></li>
              </ul>
            </div>
          </div> --}}
        </div>
        <div class="col-lg-9 col-md-8">
          {{-- <div class="row filterArea">
            <div class="col-6">
              <select name="guiest_id1" id="guiest_id1" class="select-drop">
                <option value="0">Default sorting</option>
                <option value="1">Sort by popularity</option>
                <option value="2">Sort by rating</option>
                <option value="3">Sort by newness</option>
                <option value="3">Sort by price</option>
              </select>
            </div>
            <div class="col-6">
              <div class="btn-group float-right" role="group">
                <button type="button" class="btn btn-default active" onclick="window.location.href='product-grid-left-sidebar.html'"><i class="fa fa-th" aria-hidden="true"></i><span>Grid</span></button>
                <button type="button" class="btn btn-default" onclick="window.location.href='product-list-left-sidebar.html'"><i class="fa fa-th-list" aria-hidden="true"></i><span>List</span></button>
              </div>
            </div>
          </div> --}}
          <div class="row">
            @foreach($list as $list)
            <div class="col-md-6 col-lg-4">
              <div class="productBox">
                <div class="productImage clearfix" title="{{substr($list->kategori,5)}}">
                  <div id="image-frame" title="{{$list->kategori}}">
                    <img src="{{ asset('img/vendor/'.$list->gambar1) }}" alt="products-img" id="image-inside" title="{{$list->kategori}}">
                  </div>
                  <div class="productMasking">
                    <ul class="list-inline btn-group" role="group">
                      <li><a class="btn btn-default" {{--ata-toggle="modal"--}} href="{{url('/detail/'.$list->id)}}" ><i class="fa fa-eye"> View</i> </a></li>
                    </ul>
                  </div>
                </div>
                <div class="productCaption clearfix text-center" title="{{substr($list->kategori,5)}}">
                  <a href="{{url('/detail/'.$list->id)}}">
                    <h4>{{$list->nama}}</h4>
                  </a>
                  <h5>{{$list->jenis}}</h5>
                </div>
              </div>
            </div>
            @endforeach


          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
