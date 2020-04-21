@extends('layouts/homelayout')

@section('content')
  <div id="chat-app">
    <message-container
      :contacts="{{ json_encode($contacts) }}"
      :current-user="{{ $profil[0]->id }}"
    >

    </message-container>
  </div>

  <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
@endsection
