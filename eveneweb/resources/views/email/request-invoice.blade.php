<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
  .container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  .img-logo {
    width: 10rem;
  }
  .divider {
    width: 100%;
    border-top: double;
    margin: 2rem 0;
  }
  .steps {
    margin-bottom: 0;
  }
  .footer {
    text-align: center;
  }
  @media only screen and (min-width: 768px) {
    .container {
      width: 750px;
    }
  }
  @media only screen and (min-width: 992px) {
    .container {
      width: 970px;
    }
  }
  @media only screen and (min-width: 1200px) {
    .container {
      width: 1170px;
    }
    .img-logo {
      width: 15rem;
    }
  }
</style>
<body>
<div class="container">
  <img class="img-logo" src="{{ asset('/img/new-evene-logo.png') }}" />
  <h4>Hi... {{ $vendorName  }}</h4>
  <p>Terima kasih telah bekerja sama dengan EVENE.
    <br/>Berikut terdapat permintaan pembuatan Invoice segera kepada
  </p>
  <h4>{{ $customerName }}</h4>

  <div class="divider"></div>

  <p>Kepada partner kami yang terhormat,
    <br/>Untuk menjaga kepercayaan Customer, kami sangat menyarankan untuk melakukan setiap transaksi melalui
  rekening EVENE. Hal ini diperuntukkan demi keamanan serta kenyamanan semua pihak.
  </p>

  <h3>Cara Pembuatan Invoice</h3>
  <p>Setelah anda sudah membicarakan kepada calon customer anda terkait permintaan mereka melalui EVENE,
    kirimkan invoice kepada customer tersebut dengan cara :
  </p>
  <ol>
    <li>
      <h4 class="steps">Tekan Create Invoice di kolom Chat</h4>
      <dl>Klik button Create Invoice yang terdapat di dalam kolom chat, lalu</dl>
    </li>
    <li>
      <h4 class="steps">Input data Invoice</h4>
      <dl>Masukkan data-data customer anda</dl>
      <ul style="list-style-type: disc;">
        <li>Nama</li>
        <li>Jenis Acara</li>
        <li>Tema</li>
        <li>Tanggal Acara</li>
        <li>Keterangan (DP, Pelunasan, atau lainnya)</li>
        <li>Nilai Transaksi</li>
      </ul>
    </li>
    <li>
      <h4 class="steps">Send Invoice</h4>
      <dl>Jika sudah memasukkan data diatas, tekan tombol Send Invoice untuk mengirimkan invoice kepada customer anda.</dl>
      <dl>*Data yang telah anda masukkan tersebut juga masuk kedalam menu My Order.</dl>
    </li>
    <li>
      <h4 class="steps">Tunggu hingga transaksi berhasil</h4>
    </li>
  </ol>

  <div class="divider"></div>

  <div class="footer">
    <h4 style="font-weight: bold">Thank You For Trusting <span style="color:#FCDF58">EVENE</span></h4>

    <h5>If you have any question about this email, please contact us: <br/> (+62)82114360256  / eveneofficial@gmail.com</h5>
    <h5></h5>
  </div>
</div>
</body>
</html>