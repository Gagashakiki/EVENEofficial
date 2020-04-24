@extends('layouts/homelayout')

@section('content')
  <div id="chat-app">
    <message-container
      :contacts='{{ json_encode($contacts) }}'
      :current-user='{{ $profil[0]->id }}'
      current-user-type="{{ $profil[0]->jenis }}"
    >
    </message-container>
  </div>
  <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
@endsection
