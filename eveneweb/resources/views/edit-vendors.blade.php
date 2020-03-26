@extends('layouts/homelayout')

@section('content')
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
    <form>
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
                            <h2>Vendor #451221</h2>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3 text-center mt-3 control-label"><strong>Vendor Name
                                </strong></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="" placeholder="Celine Kesley">
                            </div>
                        </div>

                        <div class="row">
                            {{-- Image Column --}}
                            <div class="col-md-6 col-12">
                                <div class="col-md-12 col-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Image 1</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                        class="img-fluid" alt="profile-image">
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="image-1" class="form-control">
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
                                                    <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                        class="img-fluid" alt="profile-image">
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="image-1" class="form-control">
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
                                                    <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                        class="img-fluid" alt="profile-image">
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="image-1" class="form-control">
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
                                                    <img src="{{ asset('img/products/profile/profile-image.jpg')}}"
                                                        class="img-fluid" alt="profile-image">
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Insert / Change Image</label>
                                                    <input type="file" name="image-1" class="form-control">
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
                                                <label for="" class="col-md-3 mt-3 control-label">Whatsapp</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="6281255556623">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Gmail</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="celkesley@gmail.com">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-md-3 mt-3 control-label">Description</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="10"
                                                        placeholder="Describe Package, Contacts, Address, Everything your client's need to know.."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</section>
@endsection
