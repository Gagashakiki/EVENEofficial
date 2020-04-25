@extends('layouts/homelayout')

@section('content')
  <!-- MAIN CONTENT SECTION -->
  <section>
    <div id="main-section" class="container-fluid">
      <div class="container" id="main">
        <div class="d-flex flex-column justify-content-center align-items-center wording-section">
          <h1>How <span style="color:#FBF000">EVENE</span> Works</h1>
          <div class="row mt-5">
            <div class="col-sm d-flex flex-column justify-content-center text-center">
              <img class="mb-5" src="{{ asset('img/evene-works/evene-works1.png') }}" height="237">
              <h4 style="font-weight: 500">1. <b>Find the Vendor that suits you</b> and chat them using <span style="color:#FBF000">EVENE</span></h4>
            </div>
            <div class="col-sm d-flex flex-column justify-content-center text-center">
              <img class="mb-5" src="{{ asset('img/evene-works/evene-works2.png') }}" height="237">
              <h4 style="font-weight: 500">2. <b>Get a quotation/deals from your choosen vendor.</b> After that, ask them to send an invoice to you.</h4>
            </div>
            <div class="col-sm d-flex flex-column justify-content-center text-center">
              <img class="mb-5" src="{{ asset('img/evene-works/evene-works3.png') }}" height="237">
              <h4 style="font-weight: 500">3.	<b>Finish the payment.</b> Make sure you transfer to our official bank account for safety reason.
                Click <a data-toggle="modal" data-target="#panduanModal"  style="text-decoration:underline; font-style: italic; color:#FBF000">here</a> to learn How to done your payment.
              </h4>
            </div>
            <div class="col-sm d-flex flex-column justify-content-center text-center">
              <img class="mb-5" src="{{ asset('img/evene-works/evene-works4.png') }}" height="237">
              <h4>4. Your dream will be come true.</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="panduanModal" tabindex="-1" role="dialog" aria-labelledby="panduanModalLabel"
       aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="panduanModalLabel">Panduan Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ol style="padding:0 1rem">
            <li>Gunakan ATM yang kamu miliki</li>
            <li>Pilih "TRANSFER"</li>
            <li>Pastikan kamu mencatat kode pembayaran atau rekening yang diberikan berikut jumlah yang harus dibayarkan yang tertera di dalam invoice.</li>
            <li>Masukan Nomor Rekening <b>(BCA)2302626686 a.n Gagas Hakiki</b></li>
            <li>Check kebenarannya agar tidak salah. Jika informasi ini sudah benar, pilih opsi Ya.</li>
            <li>Masukkan nominal sesuai dengan yang ditentukan</li>
            <li>Pembayaran Selesai.</li>
            <li>Kirim bukti pembayaran melalui
              <br/> <b>Email eveneofficial@gmail.com</b>
              <br/> <b>Whatsapp Admin (+62)82114360256</b>
            </li>
            <li>Setelah bukti pembayaran telah terkirim, pembayaran anda akan terverifikasi.</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection
