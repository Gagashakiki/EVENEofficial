@extends('layouts/homelayout')

@section('content')
  <div id="chat-app">
    <message-container asset-url="{{ asset('/img/avatar/') }}" :contacts="{{ json_encode($contacts) }}">

    </message-container>
  </div>

  <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
@endsection
