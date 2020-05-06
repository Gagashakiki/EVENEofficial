<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
  <tbody>
    <tr>
      <td>
        <img width="200" height="200" src="{{ asset('/img/new-evene-logo.png') }}" />
        <h4>Hi... {{ $vendorName  }}</h4>
        <p>Terima kasih telah bekerja sama dengan EVENE.
          <br/>Berikut terdapat permintaan pembuatan Invoice segera kepada
        </p>
        <h4>{{ $customerName }}</h4>

        <div class="divider" style="width: 100%;border-top: double;margin: 2rem 0;"></div>
      </td>
    </tr>
    <tr>
      <td>
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
            <h4 style="margin-bottom: 0;">Tekan Create Invoice di kolom Chat</h4>
            <p style="margin-block-start: 0;margin-block-end: 0; margin: 0">Klik button <span style="font-weight: bold; font-style: italic;">Create Invoice</span> yang terdapat di dalam kolom chat, lalu</p>
          </li>
          <li>
            <h4 style="margin-bottom: 0;">Input data Invoice</h4>
            <p style="margin-block-start: 0;margin-block-end: 0; margin:0">Masukkan data-data customer anda</p>
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
            <h4 style="margin-bottom: 0;">Send Invoice</h4>
            <p style="margin-block-start: 0;margin-block-end: 0; margin:0;">Jika sudah memasukkan data diatas, tekan tombol <span style="font-weight: bold; font-style: italic;">Send Invoice</span> untuk mengirimkan invoice kepada customer anda.</>
            <p style="margin-block-start: 0;margin-block-end: 0; margin:0;">*Data yang telah anda masukkan tersebut juga masuk kedalam menu <span style="font-weight: bold; font-style: italic;">My Order.</span></p>
          </li>
          <li>
            <h4 style="margin-bottom: 0;">Tunggu hingga transaksi berhasil</h4>
            <p style="margin-block-start: 0;margin-block-end: 0; margin: 0;">
              Jika customer anda sudah membayar melalui rekening EVENE, maka anda akan mendapat email verifikasi serta status pembayaran didalam menu My Order pun akan berubah.
            </p>
            <p style="margin-block-start: 0;margin-block-end: 0; margin: 0;">
              silahkan follow up kepada customer untuk memverifikasi transaksi anda.
            </p>
          </li>
        </ol>
        <div class="divider" style="width: 100%;border-top: double;margin: 2rem 0;"></div>
      </td>
    </tr>
    <tr>
      <td>
        <div style="text-align: center">
          <h4 style="font-weight: bold">Thank You For Trusting <span style="color:#FCDF58">EVENE</span></h4>

          <h5>If you have any question about this email, please contact us: <br/> (+62)81389691252  / eveneofficial@gmail.com</h5>
          <h5></h5>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>