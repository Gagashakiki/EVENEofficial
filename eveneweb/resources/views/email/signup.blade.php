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
  a:hover, button:hover{
    cursor:pointer;
  }
  .container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  .img-logo {
    width: 10rem;
  }
  .italic {
    font-style: italic;
  }
  .divider {
    width: 100%;
    border-top: double;
    margin: 2rem 0;
  }
  .verify {
    margin: 3rem 0;
  }
  .center {
    text-align: center;
  }
  .btnVerify {
    text-decoration: none;
    background-color: #C5AE45;
    padding: 1rem 3rem;
    border-radius:1rem;
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
  <h2>Hi, {{$username}}</h2>
  <div class="center">
    <h3 class="italic">You recently signed up in our website, please verify your email address to get started with EVENE.</h3>

    <div class="verify">
      <h4 class="italic">This helps us to keep your data and information safe and secure.</h4>

      <a href="{{$link}}"><button class="btnVerify">VERIFY EMAIL</button></a>

      <h3 class="italic">THANK YOU.</h3>
    </div>

    <h4>Didn't sign up? <br/> You can slightly ignore this email</h4>

    <div class="divider"></div>
    <h4 style="font-weight: bold">Thank You For Trusting <span style="color:#FCDF58">EVENE</span></h4>

    <h5>If you have any question about this email, please contact us: <br/> (+62)81389691252  / eveneofficial@gmail.com</h5>
    <h5></h5>
  </div>
</div>
</body>
</html>