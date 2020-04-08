@extends('layouts/homelayout')

@section('content')

  <!-- MAIN CONTENT SECTION -->
  <section>
    <div id="main-section" class="container-fluid" style="background: url('{{ asset('img/wording/signup-section.png') }}') no-repeat;background-size: cover">
      <div class="container">
        <div class="d-flex flex-column justify-content-center wording-section">
          <h1 style="font-weight: bold;color:white;width:40%">Join EVENE to Easily Improve Your Business</h1>
          <h4 style="color:white;font-weight:lighter" class="wording">Get a lot of advantage and elevate your business with EVENE.</h4>
          <div class="d-flex wording">
            <div>
              <a data-toggle="modal" href="#signup-vendor">
                <button style="color:white" class="eveneBtn btn-outline-primary btn-lg">Sign Up</button>
              </a>
            </div>
            <div style="margin-left: 1rem">
              <a data-toggle="modal" href='.login-modal'>
                <button style="color:white" class="eveneBtn btn-outline-primary btn-lg">Sign In</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="why-section">
      <div class="d-flex flex-column justify-content-center align-items-center wording-section">
        <h1>WHY YOU SHOULD JOIN EVENE?</h1>
        <div class="row mt-5">
          <div class="col-sm d-flex flex-column justify-content-center text-center">
            <img src="{{ asset('img/wording/wording-1.png') }}" height="237">
            <h4 class="wording">Firstly, we will help you to boost your business awareness.</h4>
          </div>
          <div class="col-sm d-flex flex-column justify-content-center text-center">
            <img src="{{ asset('img/wording/wording-2.png') }}" height="237">
            <h4 class="wording">Then, customers will find you.</h4>
          </div>
          <div class="col-sm d-flex flex-column justify-content-center text-center">
            <img src="{{ asset('img/wording/wording-3.png') }}" height="237">
            <h4 class="wording">And Magically your business will improved.</h4>
          </div>
        </div>
      </div>
    </div>
    <div id="how-section" class="container-fluid" style="background: url('{{ asset('img/wording/how-section.png') }}') no-repeat;background-size: cover">
      <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center text-center wording-section">
          <h1 style="color:white">HOW?</h1>
          <h4 style="width:76%;color:white" class="wording">We will periodically review your account, of course we will give you advices how to improve your branding,
            awareness and your business development.</h4>
        </div>
      </div>
    </div>
    <div id="what-section" class="container">
      <div class="d-flex flex-column justify-content-center align-items-center text-center wording-section">
        <h1>What if customers don’t find you?</h1>
        <h4 style="width:76%" class="wording">It means there is something you have to improve in your business and profile. But don’t worry,
          it is our pleasure to help you. You can always arrange a consultation with us through online or offline.</h4>
      </div>
    </div>
    <div id="join-section" class="container-fluid" style="background: url('{{ asset('img/wording/join-section.png') }}') no-repeat;background-size: cover">
      <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center text-center wording-section">
          <h1 style="color:white">ARE YOU READY TO IMPROVE YOUR BUSINESS?</h1>
          <div class="d-flex wording">
            <div>
              <a data-toggle="modal" href="#signup-vendor">
                <button style="color:white" class="eveneBtn btn-outline-primary btn-lg">Sign Up</button>
              </a>
            </div>
            <div style="margin-left:1rem;">
              <a data-toggle="modal" href=".login-modal">
                <button style="color:white" class="eveneBtn btn-outline-primary btn-lg">Sign In</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
