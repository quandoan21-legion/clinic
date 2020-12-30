<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
<link rel='stylesheet' href={{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}>
<link rel='stylesheet' href={{asset('https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&amp;subset=latin,latin-ext')}}>
<link rel="stylesheet" href={{asset('homepage_asset/register/style.css')}}/>
<link rel="stylesheet" href={{asset('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css')}}>
<link rel="stylesheet" href={{asset('button_asset/style.css')}}>



</head>
<body>
  <span>
    <a  href="{{route('index')}}">Homepage</a>
  <span>
<!-- partial:index.partial.html -->
<div class="materialContainer">


   <div class="box">
    @if (Session::has('error'))
       <h4>{{Session::get('error')}}</h4>
    @endif
    @if (Session::has('success'))
    <h4>{{Session::get('success')}}</h4>
    @endif
      <div class="title">LOGIN</div>
      @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

      <form method="post" action="{{route('process_login_patient')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="input">
         <label for="name">Email</label>
         <input type="text" name="email" id="name">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="pass">Password</label>
         <input type="password" name="password" id="pass">
         <span class="spin"></span>
      </div>
      

      <div class="button login">
         <button><span>GO</span> <i class="fa fa-check"></i></button>
      </div>
    </form>
      <a href="" class="pass-forgot">Forgot your password?</a>

   </div>

   <div class="overbox">
      <div class="material-button alt-2"><span class="shape"></span></div>

      <div class="title">REGISTER</div>
      <form method="post" action="{{route('process_register')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="input">
         <label for="regname">Name</label>
         <input type="text" name="name" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Email</label>
         <input type="email" name="email" id="regpass">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Password</label>
         <input type="password" name="password" id="reregpass">
         <span class="spin"></span>
    


      <div class="button">
         <button><span>NEXT</span></button>
      </div>

    </form>
   </div>

</div>
<!-- partial -->
  <script src={{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}></script>
  <script  src={{asset('homepage_asset/register/script.js')}}></script>
  <script src={{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}></script>
  <script src={{asset('https://s.codepen.io/assets/libs/modernizr.js')}}></script>
  <script  src={{asset('button_asset/script.js')}}></script>

</body>
</html>
