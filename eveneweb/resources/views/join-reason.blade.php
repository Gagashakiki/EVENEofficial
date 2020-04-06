@extends('layouts/homelayout')

@section('content')

  <!-- MAIN CONTENT SECTION -->
  <section class="p-3">
    <div class="container p-5">
      <div class="d-flex justify-content-center">
        <h1>WHY YOU SHOULD JOIN EVENE?</h1>
      </div>
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
    <div class="container mt-5 p-5">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h1>HOW?</h1>
        <h3 style="width:76%" class="wording">We will periodically review your account, of course we will give you advices how to improve your branding,
          awareness and your business development.</h3>
      </div>
    </div>
    <div class="container mt-5 p-5">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h1>What if customers don’t find you?</h1>
        <h3 style="width:76%" class="wording">It means there is something you have to improve in your business and profile. But don’t worry,
          it is our pleasure to help you. You can always arrange a consultation with us through online or offline.</h3>
      </div>
    </div>
  </section>

@endsection
