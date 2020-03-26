@extends('layouts/homelayout')

@section('content')
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix userProfile">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{ url('/myvendors') }}" class="btn btn-default active"><i class="fa fa-th"
                            aria-hidden="true"></i>My Vendors</a>
                    <a href="{{ url('/profile') }}" class="btn btn-default "><i class="fa fa-user"
                            aria-hidden="true"></i>Profile</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="innerWrapper">
                    <div class="orderBox">
                        <h2>All Orders</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Vendor ID</th>
                                        <th>Vendor Name</th>
                                        <th>Contacts</th>
                                        <th>Start Price</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($vendor as $vendor)
                                    <tr>
                                        <td>#{{$vendor->id}}</td>
                                        <td>{{$vendor->nama}}</td>
                                        <td>+62 {{$vendor->notelp}} <br> {{$vendor->email}}</td>
                                        <td>Rp. {{number_format($vendor->harga)}}</td>
                                        <td>{{$vendor->status}}</td>
                                        <td><a href="{{ url('/edit-vendors/451221') }}"
                                                class="btn btn-sm btn-secondary-outlined">View / Edit</a></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
