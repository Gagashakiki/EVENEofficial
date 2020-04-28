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
    width: 20rem;
  }
  .divider {
    width: 100%;
    border-top: double;
    margin: 2rem 0;
  }
  .steps {
    margin-bottom: 0;
  }
  .invoice-box {
    border: 1px solid black;
    border-radius: 4rem;
  }
  .center {
    text-align: center;
  }
  .invoice-billed {
    text-align: right;
  }
  .invoice-header{
    display: grid;
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
  }
</style>
<body>
<div class="container">
  <h1>INVOICE</h1>
  <h4>Hi, {{$customerName}} <br/>Thank You! Your booking has been recorded and Confirmed.</h4>

  <h3>Here's your booking summary</h3>

  <div class="invoice-box">
    <div class="invoice-header">
      <img class="img-logo" src="{{ asset('/img/new-evene-logo.png') }}"  alt="evene-logo"/>
      <h1>INVOICE</h1>
    </div>
    <div class="invoice-body">

    </div>
    <div class="invoice-footer center">
      <h5>If you have any question about this email, please contact us: <br/> (+62)82114360256  / eveneofficial@gmail.com</h5>
      <h4 style="font-weight: bold">Thank You For Trusting <span style="color:#FCDF58">EVENE</span></h4>
      <div class="invoice-billed">
        <h4>BILLED TO</h4>
      </div>
    </div>
  </div>



  <div class="divider"></div>

  <div class="center">


    <h5>If you have any question about this email, please contact us: <br/> (+62)82114360256  / eveneofficial@gmail.com</h5>
    <h5></h5>
  </div>
</div>
</body>
</html>