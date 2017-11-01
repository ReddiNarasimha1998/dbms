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

<nav class="navbar navbar-inverse" style="border-radius:0px;width:1201px;">
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
  <a href="{{route('profilepic')}}"><img src="/uploads/avatars/{{ Auth::user()->image }}" width="165px" height="148px"></a>
</div><br>

<div class="container" style="max-width:60em;margin: 0em auto;background-color: #fff;border-radius: 4.2px;box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);">
  @if(session()->has('message'))
    <div class="alert alert-success" style="text-align:center;float:left;">
        {{ session()->get('message') }}
    </div>
@endif
<br>
  <div style="margin-left:300px;">
  <form class="form-horizontal" action="/feedback" method="post">
    {{csrf_field()}}

    <div class="form-group">
	      <label for="gender" style="color:#7ed321"><h3>FEEDBACK:</h3></label><br>       
	  </div>
	  <div>
	  <input type="radio" name="complaint" value="hostel" required> <span style="color:#7ed321" >HOSTEL</span><br>
	  <input type="radio" name="complaint" value="academics" required> <span style="color:#7ed321" >ACADEMICS</span><br>
	  </div>
	 <div class="form-group">
	 <label ><h6>FEEDBACK:</h6></label><br>
	  <div id="textarea">
	<textarea rows="4" cols="50" style="margin-left:45px;color:black;" name="feedback" required ></textarea>
	</div>
	<br>
	 <div class="col-sm-4">
        <button type="submit" class="btn btn-default" style="margin-left:30px;">Submit</button><br><br>
        <a href="{{route('dashboard',['username'=>Auth::user()->username])}}" style="text-decoration:none;margin-left:30px;">BACK TO HOME</a>
      </div>
	</div>
  </form></div>
</div>
	

</body>
</html>