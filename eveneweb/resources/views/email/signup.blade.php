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
      <h2>Hi, {{$username}}</h2>
      <div style="text-align: center">
        <h3 style="font-style: italic;">You recently signed up in our website, please verify your email address to get started with EVENE.</h3>

        <div style="margin: 3rem 0;">
          <h4 style="font-style: italic;margin-bottom: 3rem">This helps us to keep your data and information safe and secure.</h4>

          <a style="text-decoration: none;background-color: #FCDF58;padding: 1rem 3rem;border-radius:1rem;color:#404040" href="{{$link}}">VERIFY EMAIL</a>

          <h3 style="font-style: italic;margin-top:3rem">THANK YOU.</h3>
        </div>

        <h4>Didn't sign up? <br/> You can slightly ignore this email</h4>

        <div class="divider" style="width: 100%;border-top: double;margin: 2rem 0;"></div>
        <h4 style="font-weight: bold">Thank You For Trusting <span style="color:#FCDF58">EVENE</span></h4>

        <h5>If you have any question about this email, please contact us: <br/> (+62)81389691252  / eveneofficial@gmail.com</h5>
      </div>
    </td>
  </tr>
  </tbody>
</table>
</body>
</html>