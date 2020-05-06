<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
  <tbody>
  <tr>
    <td>
      <h1 style="letter-spacing: .5rem">INVOICE</h1>
      <h4>Hi, {{$customerName}} <br/><span style="font-weight: normal">Thank You! Your booking has been recorded and Confirmed.</span></h4>

      <h3>Here's your booking summary</h3>
    </td>
  </tr>
  <tr>
    <td>
      <div id="invoice-box" style="padding: 0 2rem;border: 1px solid black;border-radius: 4rem;">
        <div id="invoice-header">
          <table style="width:100%;">
            <tr>
              <td>
                <img width="200" height="200" src="{{ asset('/img/new-evene-logo.png') }}"  alt="evene-logo"/>
              </td>
              <td style="text-align:right" colspan="2">
                <h1 style="margin:0">INVOICE</h1>
                <table style="float: right;">
                  <tr>
                    <td style="text-align:right">Date</td>
                    <td style="text-align:right; background-color: #ECF0F1;min-width:6rem">{{ date("d/m/Y", strtotime($order->date)) }}</td>
                  </tr>
                  <tr>
                    <td style="text-align:right">No. Invoice</td>
                    <td style="text-align:right; min-width:6rem">#{{ $order->number }}</td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
        <div class="invoice-body" style=" margin-bottom:2rem">
          <table style="width:100%; border-collapse: collapse;">
            <colgroup>
              <col span="1" style="width:60%">
              <col span="1" style="width:40%">
            </colgroup>
            <thead>
            <tr>
              <th style="text-align: left; border-bottom: 1px solid black">DESCRIPTION</th>
              <th style="text-align: center; border-bottom: 1px solid black">AMOUNT</th>
            </tr>
            </thead>
            <tbody>
            <tr style="background-color: #ECF0F1">
              <td>{{ $order->description }}</td>
              <td style="text-align: right;">Rp{{ number_format($order->amount) }}</td>
            </tr>
            <tr>
              <td><br></td>
              <td></td>
            </tr>
            <tr style="background-color: #ECF0F1">
              <td><br></td>
              <td style="border-bottom: 1px solid black"></td>
            </tr>
            <tr>
              <td rowspan="3"></td>
              <td style="border-bottom: 3px double black;">
                <p style="margin:0; float:left">Total</p>
                <p style="margin:0; text-align: right">Rp{{ number_format($order->amount) }}</p>
              </td>
            </tr>
            <tr>
              <td style="color:#404040; text-align: center">Make all checks payable to</td>
            </tr>
            <tr>
              <td style="text-align: center">[{{ $vendorName }}]</td>
            </tr>
            </tbody>
          </table>
        </div>
        <div id="invoice-footer" style="text-align: center;margin-bottom: 2rem;">
          <h5 style="margin:0;font-weight: normal">If you have any question about this email, please contact us: <br/> (+62)81389691252  / eveneofficial@gmail.com</h5>
          <h4 style="margin:0; color:#404040">Thank You For Trusting <span style="color:#FCDF58">EVENE</span></h4>
          <div id="invoice-billed" style="margin-top: 2rem">
            <h4 style="text-align: right; margin-top:0">BILLED TO</h4>
            <h4 style="text-align: right; margin:0">({{ $customerName }})</h4>
          </div>
        </div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div id="footer" style="text-align: center">
        <h4 style="color:#404040">Please proceed the payment to this bank account <br>
          (BCA) 2302626686 - GAGAS HAKIKI
        </h4>

        <h5 style="color:#BDC3C7">We will confirmed the payment to this email 1 x 24 hours after the payment <br>
          <span style="color:black">Click
      <a href="https://eveneofficial.com/about-us#how-evene-work" target="_blank" style="color:#FCDF58; font-style: italic">Here</a>
      to Learn how to done your payment with EVENE</span>
        </h5>

        <h4 style="color:red">WARNING!</h4>

        <h5 style="color:red">Make sure you transfer to our official bank account (written above). Transfer to <br> another bank account is out of our responsibility.</h5>

        <h5 style="margin:0;font-weight: normal">If you have any question about this email, please contact us: <br/> (+62)81389691252  / eveneofficial@gmail.com</h5>
      </div>
    </td>
  </tr>
  </tbody>
</table>
</body>
</html>