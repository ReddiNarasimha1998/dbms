<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script>
  function myfunction()
  {
  var x = document.getElementById("textarea");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }
  </script>
</head>
<body >
<div style="float:left;">
<div class="jumbotron" style="text-align:center;height:50px;color:white;background-color:black;opacity:0px;margin-bottom:0px;width:1201px;">
<h2 style="margin-top:0px;">User Profile</h2>
</div>

<nav class="navbar navbar-inverse" style="border-radius:0px;height:63px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"style="margin-left:20px;color:white">COMPLAINT BOX</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
	<li ><a href="{{route('dashboard',['username'=>Auth::user()->username])}}"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
     <li><a href="{{route('profile')}}"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
     <li><a href="{{route('changepassword')}}"><span class="glyphicon glyphicon-lock"></span>Change Password</a></li>
      <li><a href="{{route('logout')}}""><span class="glyphicon glyphicon-log-in"></span>Sign Out</a></li>
    </ul>
  </div>
</nav>
</div>
<div style="float:left;">
<a href="{{route('profilepic')}}"><img src="/uploads/avatars/{{ Auth::user()->image }}" width="165" height="159"></a>
</div>

<div class="container" style="max-width:60em;margin: 0em auto;background-color: #fff;border-radius: 4.2px;box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);">
  <div style="margin-left:300px;">
  <form enctype="multipart/form-data" action="/profilepic" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="gender" style="color:#7ed321"><h3>PROFILE PHOTO:</h3></label><br>       
      
	  <img src="/uploads/avatars/{{ Auth::user()->image }}" alt="enter photo" width="203" height="159"><br><br>
	  <input type="file" name="avatar" title="choose photo(jpg,png,jpeg)" >
	  
	</div>

	 <div class="form-group">
        <button type="submit" class="btn btn-default" style="margin-left:30px;">Submit</button><br><br>
        <a href="{{route('dashboard',['username'=>Auth::user()->username])}}" style="text-decoration:none;margin-left:30px;">BACK TO HOME</a>
	</div>
  </form></div>
</div>
	 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 

</body>
</html>