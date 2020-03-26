@extends('layouts/homelayout')

@section('content')

<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="page-title">
                    <h2>Inspirations</h2>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-right">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="#">Inspiration</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix productsContent">
    <div class="container">
        <div class="row">

            @foreach($inspirasi as $data)
            <div class="col-md-4 img-hover-zoom text-center">
            <a href="/img/inspiration/{{$data->gambar}}"
                data-title="{{$data->event}}"
                data-footer="by {{$data->vendor}}"
                data-toggle="lightbox"
                data-gallery="gallery"
                data-max-width="1200"
                data-max-height="1200"
                class="col-md-4">
              <img src="/img/inspiration/{{ $data -> gambar }}" class="rounded " height="300" width="auto">
                <h4 class="mt-3 text-center">{{$data->event}}</h4>
            </a>
            </div>
            @endforeach
        </div>
    </div>

    {{-- <div class="col-md-4 mt-5 img-hover-zoom">
                <div class="card bg-dark text-white">
                    <a href="{{ url('inspiration/tes') }}">
    <img class="card-img " src="https://www.rimma.co/wp-content/uploads/2016/04/wed1.png" alt="Card image">
    <div class="card-img-overlay d-flex flex-column" style="margin-left:0; margin-right:0">
        <div class="mt-auto text-center"
            style="
                                    min-height:3em;
                                    background-image: linear-gradient(to right, rgba(0,0,0,0.05), rgba(0,0,0,0.7) , rgba(0,0,0,1) , rgba(0,0,0,0.7) ,rgba(0,0,0,0.05) );">
            <h3 class="text-light pt-auto">
                Garden Party Wedding Decoration
            </h3>
        </div>
    </div>
    </a>
    </div>
    </div>

    <div class="col-md-4 mt-5 img-hover-zoom">
        <div class="card bg-dark text-white">
            <a href="{{ url('inspiration/tes') }}">
                <img class="card-img" src="https://www.rimma.co/wp-content/uploads/2016/04/wed1.png" alt="Card image">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="mt-auto text-center"
                        style="
                                    min-height:3em;
                                    background-image: linear-gradient(to right, rgba(0,0,0,0.05), rgba(0,0,0,0.7) , rgba(0,0,0,1) , rgba(0,0,0,0.7) ,rgba(0,0,0,0.05) );">
                        <h3 class="text-light pt-auto">
                            Indoor Wedding Party Decoration
                        </h3>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-4 mt-5 img-hover-zoom">
        <div class="card bg-dark text-white">
            <a href="{{ url('inspiration/tes') }}">
                <img class="card-img" src="https://www.rimma.co/wp-content/uploads/2016/04/wed1.png" alt="Card image">
                <div class="card-img-overlay d-flex flex-column" style="margin-left:0; margin-right:0">
                    <div class="mt-auto text-center"
                        style="
                                    min-height:3em;
                                    background-image: linear-gradient(to right, rgba(0,0,0,0.05), rgba(0,0,0,0.7) , rgba(0,0,0,1) , rgba(0,0,0,0.7) ,rgba(0,0,0,0.05) );">
                        <h3 class="text-light pt-auto">
                            Sweet 17 Decoration
                        </h3>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-4 mt-5 img-hover-zoom">
        <div class="card bg-dark text-white">
            <a href="{{ url('inspiration/tes') }}">
                <img class="card-img" src="https://www.rimma.co/wp-content/uploads/2016/04/wed1.png" alt="Card image">
                <div class="card-img-overlay d-flex flex-column" style="margin-left:0; margin-right:0">
                    <div class="mt-auto text-center"
                        style="
                                    min-height:3em;
                                    background-image: linear-gradient(to right, rgba(0,0,0,0.05), rgba(0,0,0,0.7) , rgba(0,0,0,1) , rgba(0,0,0,0.7) ,rgba(0,0,0,0.05) );">
                        <h3 class="text-light pt-auto">
                            Bridal Shower
                        </h3>
                    </div>
                </div>
            </a>
        </div>
    </div> --}}

    {{-- <div class="col-md-4 mt-5">
                <div class="card bg-dark text-white">
                    <a href="{{ url('inspiration/tes') }}">
    <img class="card-img img-responsive" src="https://www.rimma.co/wp-content/uploads/2016/04/wed1.png"
        alt="Card image">
    <div class="card-img-overlay d-flex flex-column" style="margin-left:0; margin-right:0">
        <div class="mt-auto text-center"
            style="
                                    min-height:3em;
                                    background-image: linear-gradient(to right, rgba(0,0,0,0.05), rgba(0,0,0,0.7) , rgba(0,0,0,1) , rgba(0,0,0,0.7) ,rgba(0,0,0,0.05) );">
            <h3 class="text-light pt-auto">
                Garden Party Wedding Decoration
            </h3>
        </div>
    </div>
    </a>
    </div>
    </div> --}}

    </div>
</section>

@endsection
