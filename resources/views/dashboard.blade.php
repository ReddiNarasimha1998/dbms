<!DOCTYPE html>
<html>
@if (Auth::check())
<head>
<title>User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
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
</div>
<div>
  Welcome<span style="margin-left:20px;">{{Auth::user()->username}}-----<span>
</div>

<div class="container-fluid" style="background-color:#ccccff; border-radius:10px;">
<br>
<a href="{{route('hostel_complaints')}}">click here to submit a complaint regarding <strong>hostel</strong></a>
<br><br><a href="{{route('academiccomplaint')}}">click here to submit a complaint regarding <strong>academics</strong></a>
<br><br><a href="{{route('posthostel')}}">click here to have a look at all the <strong>complaints</strong></a>
<br><br><a href="{{route('feedbackform')}}">click here to submit <strong>feedback</strong></a>
<br><br</div>
</body>
@endif

</html>