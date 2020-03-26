@extends('layouts/homelayout')

@section('content')

<section class="mainContent clearfix blogPage singleBlog">
    <div class="container">
      @foreach($blog as $data)
      <div class="row">
        <div class="col-md-12">
          <div class="thumbnail">
            <center>
            <img src="/img/blog/{{$data->thumbnail}}" alt="blog-image">
          </center>
            <div class="caption">
              <div class="row">
                <div class="col-md-3 order-md-12">
                  <h5>Article</h5>
                  <ul class="list-unstyled">
                    <li>
                      <i class="fa fa-user" aria-hidden="true"></i>{{$data->penulis}}</li>
                    <li>
                      <i class="fa fa-calendar" aria-hidden="true"></i>{{\Carbon\Carbon::parse($data->tanggal)->format('d M Y')}}</li>
                    {{-- <li>
                      <i class="fa fa-tags" aria-hidden="true"></i>Travel</li> --}}
                  </ul>
                  {{-- <h5>Share</h5>
                  <ul class="list-inline">
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul> --}}
                </div>
                <div class="col-md-9 order-md-1 text-justify">
                  <h3>{{$data->judul}}</h3>
                {!!$data->isi!!}
                </div>
              </div>
            </div>
            {{-- <ul class="pager">
              <li class="previous">
                <a href="#">previous</a>
              </li>
              <li class="next float-right">
                <a href="#">next</a>
              </li>
            </ul>
            <div class="commentsArea">
              <h3>4 Comments</h3>
              <div class="media flex-wrap">
                <a class="media-left" href="#">
                  <img class="media-object" src="img/blog/avatar.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Jessica Brown </h4>
                  <h4>
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</span>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <button class="btn btn-link" type="submit">Reply</button>
                </div>
              </div>
              <div class="media flex-wrap">
                <a class="media-left" href="#">
                  <img class="media-object" src="img/blog/avatar.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Jessica Brown </h4>
                  <h4>
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</span>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <button class="btn btn-link" type="submit">Reply</button>
                  <div class="media flex-wrap">
                    <a class="media-left" href="#">
                      <img class="media-object" src="img/blog/avatar.jpg" alt="Image">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Jessica Brown </h4>
                      <h4>
                        <span>
                          <i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</span>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                      <button class="btn btn-link" type="submit">Reply</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media flex-wrap">
                <a class="media-left" href="#">
                  <img class="media-object" src="img/blog/avatar.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Jessica Brown </h4>
                  <h4>
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</span>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <button class="btn btn-link" type="submit">Reply</button>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-md-12">
          <form action="" method="POST" role="form" class="commentsForm">
            <h3>Leave Comments</h3>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="" placeholder="Email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Website">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                </div>
              </div>

            </div>
            <button type="submit" class="btn btn-primary">post comment</button>
          </form>
        </div>
      </div> --}}

      @endforeach
    </div>
  </section>

@endsection
