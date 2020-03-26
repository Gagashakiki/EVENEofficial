@extends('layouts/homelayout')

@section('content')
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{ url('/myvendors') }}" class="btn btn-default"><i class="fa fa-th"
                            aria-hidden="true"></i>My Vendors</a>
                    <a href="{{ url('/profile') }}" class="btn btn-default active"><i class="fa fa-user"
                            aria-hidden="true"></i>Profile</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="innerWrapper profile">
                    <div class="orderBox">
                        <h2>profile</h2>
                    </div>
                    @foreach($profil as $user)
                    <form method="post" action="/profile/submit" class="form-horizontal" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <?php
                        if($user->pict == ''){
                            $user->pict = 'default-photo';
                        }
                      ?>
                      <input type="hidden" name="pict" value="{{$user->pict}}">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 col-xl-2 col-12">
                            <div class="thumbnail">
                                <img src="{{ asset('img/avatar/'.$user->pict)}}" alt="profile-image">
                                  <div class="caption">
                                    <input type="file" name="pictnew">Change Avatar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-9 col-xl-10 col-12">
                              <input type="hidden" name="idu" value="{{$user->id}}">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-7">
                                        <input type="text" name="nama1" value="{{$user->nama1}}" class="form-control" id="" placeholder="Mr.">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-7">
                                        <input type="text" name="nama2" class="form-control" value="{{$user->nama2}}" id="" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 control-label">Phone Number (+62)</label>
                                    <div class="col-md-9">
                                        <input type="text" name="notelp" class="form-control" value="{{$user->notelp}}" id="" placeholder="841 8329 8138">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 control-label">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" value="{{$user->email}}" class="form-control" id=""
                                            placeholder="celkesley@gmail.com" disabled>
                                    </div>
                                </div>
                                <input type="hidden" name="email" value="{{$user->email}}">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" name="pass" class="form-control" id="pass" placeholder="***********">
                                        <input style="position:absolute; right:5%; top:15%;" type="button" onclick="showpass1()" value="Show" id="showpass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 control-label">New Password</label>
                                    <div class="col-md-9">
                                        <input type="password" name="passnew" class="form-control" id="confpass" placeholder="***********">
                                      <input style="position:absolute; right:5%; top:15%;" type="button" onclick="showpassc()" value="Show" id="showpass2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class=" col-md-12 ">
                                        <button type="submit" class="btn btn-primary float-right">SAVE INFO</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                  </form>
                    @endforeach
                </div>
            </div>
        </div>
        <script>
      function showpass1(){
      var x = document.getElementById("pass");
      if (x.type === "password") {
      x.type = "text";
      $("#showpass").val("Hide");
      }
      else {
      x.type = "password";
      $("#showpass").val("Show");
      }
    }
      function showpassc(){
    var y = document.getElementById("confpass");
    if (y.type === "password") {
      y.type = "text";
      $("#showpass2").val("Hide");
    } else {
      y.type = "password";
      $("#showpass2").val("Show");
    }
  }
  </script>
    </div>
</section>
@endsection
