@extends('layouts.homelayout')

@section('content')

    <!-- LIGHT SECTION -->
    <section class="lightSection clearfix pageHeader">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="page-title">
                <h2>Blog</h2>
              </div>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb float-right">
                <li>
                  <a href="index.html">Home</a>
                </li>
                <li class="active">Blog </li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix blogPage">
        <div class="container">
          <div class="row">
            @foreach($list as $lists)
            <div class="col-md-12">
              <div class="thumbnail">
                <center>
                <a href="{{ url('blog/1') }}"><img class="mw-100" src="img/blog/ultah.jpg" alt="blog-image"></a>
                </center>
                <div class="caption">
                  <div class="row">
                    <div class="col-md-2 order-md-12">
                      <h5>Details</h5>
                      <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>{{$lists->penulis}}</a></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>{{\Carbon\Carbon::parse($lists->tanggal)->format('d M Y')}}</li>
                      </ul>
                    </div>
                    <div class="col-md-10 order-md-1">
                      <h3><a href="{{ url('blog/'.$lists->id) }}">{{$lists->judul}} </a> </h3>
                    {!!$lists->isi!!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          <div class="row">
            <div class="col-md-12">
              <div class="text-center">
                <ul class="pagination justify-content-center">

                {{ $list->links() }}
              
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
