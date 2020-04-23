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
  <div class="modal fade" id="requestInvoiceModal" tabindex="-1" role="dialog" aria-labelledby="requestInvoiceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="requestInvoiceLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
@endsection
