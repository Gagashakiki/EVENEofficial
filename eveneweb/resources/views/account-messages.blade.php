@extends('layouts/homelayout')

@section('content')
  <div id="chat-app">
    <message-container image="{{ asset('img/avatar/default-photo.jpg') }}">

    </message-container>
  </div>

  <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
@endsection
