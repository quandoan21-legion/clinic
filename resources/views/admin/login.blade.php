<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('homepage_asset/login/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<form class ="login" method="post" action="{{route('process_login_admin')}}"> 
  <input type ="hidden" name="_token" value="{{csrf_token()}}">
  @if (Session::has('error'))
  <h4>{{Session::get('error')}}</h4>
  @endif

  @if (Session::has('success'))
  <h4>{{Session::get('success')}}</h4>
  @endif
  @if ($errors->any())
  <div class  ="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  <input type ="text" placeholder="Email" name="email">
  <input type ="password" placeholder="Password" name="password">
  <button>Login</button>
</form>


  
</body>
</html>
