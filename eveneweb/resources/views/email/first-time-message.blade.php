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
        <img src="{{ asset('/img/new-evene-logo.png') }}" width="200" height="200" />
        <h2>YOU GOT A MESSAGE!</h2>

        <h4 style="margin: 0;">Hi {{$receiver}},</h4>
        <p style="margin-top: 0;">You got a message,</p>

        <h4 style="margin: 0;">From: <span style="font-weight: normal;">{{$sender}}</span></h4>
        <h4 style="margin: 0;">Message: <span style="font-weight: normal;">{{$data}}</span></h4>

        <p>You can respond this message thru <span style="color:#FCDF58">EVENE</span> website at your chat page. Click <a>Here</a> to go thru EVENE chat page.</p>

        <h4 style="margin: 0;">The sooner you respond, the better you can get.</h4>

        <div class="divider" style="width: 100%;border-top: double;margin: 2rem 0;"></div>
      </td>
    </tr>
    <tr>
      <td>
        <div id="footer" style="text-align:center;">
          <h4 style="font-weight: bold">Thank You For Trusting <span style="color:#FCDF58">EVENE</span></h4>

          <h5>If you have any question about this email, please contact us: <br/> (+62)81389691252 / eveneofficial@gmail.com</h5>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>