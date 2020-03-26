@extends('layouts/homelayout')

@section('content')
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
    <form action="/editvendors/submit" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="container">
            <div class="row mb-5">
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
                <div class="col-12">
                    <div class="innerWrapper singleOrder mb-3">
                        <div class="orderBox">
                            <h2>Vendor</h2>
                        </div>
                        @foreach($detail as $detail)
                        <div class="form-group row">
                            <label for="" class="col-md-3 text-center mt-3 control-label"><strong>Vendor Name*
                                </strong></label>
                            <div class="col-md-7">
                                <input type="text" value="{{$detail->nama}}" name="nama" class="form-control" id="" placeholder="Celine Kesley" required>
                            </div>
                        </div>
                        <input type="hidden" name="idv" value="{{$detail->id}}">
                        <input type="hidden" name="gambar1" value="{{$detail->gambar1}}">
                        <input type="hidden" name="gambar2" value="{{$detail->gambar2}}">
                        <input type="hidden" name="gambar3" value="{{$detail->gambar3}}">
                        <input type="hidden" name="gambar4" value="{{$detail->gambar4}}">
                        <div class="row">
                            {{-- Image Column --}}
                            <div class="col-md-6 col-12">
                                <div class="col-md-12 col-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Image 1*</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                  @if(!is_null($detail->gambar1)||!empty($detail->gambar1))
                                                    <img src="{{ asset('img/vendor/'.$detail->gambar1)}}"
                                                        class="img-fluid" alt="profile-image">
                                                        @else
                                                        <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                            class="img-fluid" alt="profile-image">
                                                            @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="gambar1n" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Image 2</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                  @if(is_null($detail->gambar2)||empty($detail->gambar2))
                                                  <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                      class="img-fluid" alt="profile-image">
                                                        @else
                                                        <img src="{{ asset('img/vendor/'.$detail->gambar2)}}"
                                                            class="img-fluid" alt="profile-image">
                                                            @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="gambar2n" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Image 3</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                  @if(is_null($detail->gambar3)||empty($detail->gambar3))
                                                  <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                      class="img-fluid" alt="profile-image">
                                                        @else
                                                        <img src="{{ asset('img/vendor/'.$detail->gambar3)}}"
                                                            class="img-fluid" alt="profile-image">
                                                            @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="gambar3n" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Image 4</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                  @if(is_null($detail->gambar4)||empty($detail->gambar4))
                                                  <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                      class="img-fluid" alt="profile-image">
                                                        @else
                                                        <img src="{{ asset('img/vendor/'.$detail->gambar4)}}"
                                                            class="img-fluid" alt="profile-image">
                                                            @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="gambar4n" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Detail Column --}}
                            <div class="col-md-6 col-12">
                                <div class="col-md-12 col-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Vendor Details</h4>
                                        </div>
                                        <div class="panel-body">
                                            <small class=" text-center">
                                                <p class="control-label text-danger">Please use country code without
                                                    plus
                                                    (+) ex : 6281255556623... for Whatsapp Contacts</p>
                                            </small>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Title*</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="judul" id=""
                                                        placeholder="Private Make Up by Celine" value="{{$detail->judul}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Whatsapp*</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="notelp" value="{{$detail->notelp}}" id=""
                                                        placeholder="6281255556623" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Gmail*</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="email" class="form-control" id=""
                                                        placeholder="celkesley@gmail.com" value="{{$detail->email}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Starting Price*</label>
                                                <div class="col-md-7">
                                                    <input type="number" max="999999999" name="harga" class="form-control" id=""
                                                        placeholder="2500000" value="{{$detail->harga}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Vendor</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="jenis" rows="5"
                                                        disabled>{{$detail->jenis}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Event</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="kategori" rows="5"
                                                    disabled>{{$detail->kategori}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Description</label>
                                                <div class="col-md-9">
                                                    <textarea class="ckeditor" id="ckeditor" name="detail" rows="10"
                                                    required>{{$detail->detail}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Address</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="alamat" rows="4"
                                                      required>{{$detail->alamat}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="submit" class="checking btn" id="roundedButton"><h5>Save Changes</h5></button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</section>
@endsection
