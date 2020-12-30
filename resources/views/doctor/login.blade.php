<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('homepage_asset/login_doctor/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="back">
  <canvas id="canvas" class="canvas-back"></canvas>
  <div class="backRight">    
  </div>
  <div class="backLeft">
  </div>
</div>


    <div class="right">
      <div class="content">
        <div class="form-element form-submit">
            <a href="{{route('index')}}"><button id="signUp" class="signup">Homepage</button></a>
        </div>
        <form method="post" action="{{route('process_login_doctor')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <h2>Login Doctor</h2>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-element form-stack">
                @if (Session::has('error'))
                <h4>{{Session::get('error')}}</h4>
                @endif

                @if (Session::has('success'))
                <h4>{{Session::get('success')}}</h4>
                @endif
            <label for="username-login" class="form-label">Email</label>
            <input type="email" name="email" placeholder="Enter email" class="form-control">
          </div>
          <div class="form-element form-stack">
            <label for="password-login" class="form-label">Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
          <div class="form-element form-submit">
            <button id="logIn" class="login" type="submit" name="login">Log In</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


  <script src={{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js')}}></script>
<script src={{asset('https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js')}}></script>
<script  src="{{asset('homepage_asset/login_doctor/script.js')}}"></script>

</body>
</html>
