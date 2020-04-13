@extends('layouts/homelayout')

@section('content')
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
    <form action="{{url('/account/vendors/create')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="{{ url('/account/vendors') }}" class="btn btn-default"><i class="fa fa-th"
                                aria-hidden="true"></i>My Vendors</a>
                        <a href="{{ url('/profile') }}" class="btn btn-default"><i class="fa fa-user"
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
                        <div class="form-group row">
                            <label for="" class="col-md-3 text-center mt-3 control-label"><strong>Vendor Name*
                                </strong></label>
                            <div class="col-md-7">
                                <input type="text" name="nama" class="form-control" id="" placeholder="Exp. BRILLIANCE EO" required>
                            </div>
                        </div>

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
                                                    {{-- <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                        class="img-fluid" alt="profile-image"> --}}
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="gambar1" class="form-control" required>
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
                                                    {{-- <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                        class="img-fluid" alt="profile-image"> --}}
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="gambar2" class="form-control">
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
                                                    {{-- <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                        class="img-fluid" alt="profile-image"> --}}
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="gambar3" class="form-control">
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
                                                    {{-- <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                        class="img-fluid" alt="profile-image"> --}}
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="gambar4" class="form-control">
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
                                                        placeholder="Private Make Up by Celine" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Whatsapp*</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="notelp" id=""
                                                        placeholder="6281255556623" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Gmail*</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="email" class="form-control" id=""
                                                        placeholder="celkesley@gmail.com" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Starting Price*</label>
                                                <div class="col-md-7">
                                                    <input type="number" min="1" max="999999999" name="harga" class="harga form-control" id=""
                                                        placeholder="2500000" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Vendors*</label>
                                                <div class="col-md-7">
                                                  <select class="form-control" name="jenis" required>
                                                         <option value="Event Organizer">Event Organizer</option>
                                                         <option value="Table Decoration">Table Decoration</option>
                                                         <option value="Photographer">Photographer</option>
                                                         <option value="Make up Artist">Make up Artist</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Event*</label>
                                                <div class="col-md-7">
                                                  <input type="checkbox" name="kategori[]" value="birthday-party">Birthday Party<br />
                                                  <input type="checkbox" name="kategori[]" value="anniversary">Anniversary<br />
                                                  <input type="checkbox" name="kategori[]" value="wedding-party">Wedding Party<br />
                                                  <input type="checkbox" name="kategori[]" value="sweet-17">Sweet 17 <br />
                                                  <input type="checkbox" name="kategori[]" value="bridal-shower">Bridal Shower <br />
                                                  <input type="checkbox" name="kategori[]" value="baby-shower">Baby Shower<br />
                                                  <input type="checkbox" name="kategori[]" value="prom-night">Prom Night<br />
                                                  <input type="checkbox" name="kategori[]" value="proposal">Proposal<br />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Description</label>
                                                <div class="col-md-9">
                                                    <textarea id="ckeditor" class="ckeditor" name="detail" rows="10"
                                                        placeholder="Describe Package, Contacts, Address, Everything your client's need to know.." required></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Address</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="alamat" rows="4"
                                                        placeholder="Describe offline address.." required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="submit" class="checking btn" id="roundedButton"><h5>Submit Vendor</h5></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</section>
<script>
$(document).ready(function () {
    $('.checking').click(function() {
      checked = $("input[name='kategori[]']:checked").length;

      if(!checked) {
        alert("You must choose at least one event.");
        return false;
      }

    });
});

</script>
@endsection
