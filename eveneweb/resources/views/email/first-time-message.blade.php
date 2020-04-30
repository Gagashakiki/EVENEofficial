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
  h3 {
    margin: 0;
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
  <h1>YOU GOT A MESSAGE!</h1>

  <h3>Hi {{$receiver}},</h3>
  <p style="margin-top: 0;">You got a message,</p>

  <h3>From: {{$sender}}</h3>
  <h3>Message: {{$message}}</h3>

  <p style="margin-bottom: 0;">You can respond this message thru <span style="color:#FCDF58">EVENE</span> website at your chat page. Click <a>Here</a> to go thru EVENE chat page.</p>

  <h3>The sooner you respond, the better you can get.</h3>

  <div class="divider"></div>

  <div class="footer">
    <h4 style="font-weight: bold">Thank You For Trusting <span style="color:#FCDF58">EVENE</span></h4>

    <h5>If you have any question about this email, please contact us: <br/> (+62)81389691252 / eveneofficial@gmail.com</h5>
    <h5></h5>
  </div>
</div>
</body>
</html>