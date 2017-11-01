<!DOCTYPE html>
<html>
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
  <div class="jumbotron" style="text-align:center;height:50px;color:white;background-color:black;opacity:0px;margin-bottom:0px;" width:1201px;>
<h2 style="margin-top:0px;">User Profile</h2>
</div>

<nav class="navbar navbar-inverse" style="border-radius:0px;width:1175px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"style="margin-left:20px;color:white">COMPLAINT BOX</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
  <li ><a href="{{route('dashboard',['username'=>Auth::user()->username])}}"><span class="glyphicon glyphicon-home"></span>Home</a></li>
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


<div class="container" style="max-width: 38em;padding: 1em 3em 2em 3em;margin: 0em auto;background-color: #fff;border-radius: 4.2px;box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);">
  <h2 style="color:#7ed321;margin-top:0px;">Change Password</h2><br>
  <form class="form-horizontal" method="post" action="/changepassword">
{{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="opass" style="color:#7ed321">Old password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Enter Old Password" required name="current_password">
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="newpass" style="color:#7ed321">New Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter New password" required name="new_password">
      </div>
    </div><br>
       <div class="form-group">
      <label class="control-label col-sm-2" for="retypenewpass" style="color:#7ed321">Retype New Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Retype New password" required name="new_password_confirmation">
      </div>
    </div>
    <button  style="margin-left:83px;" type="button" style="margin-left:30px;" class="btn btn-default" id ="show" onclick="if(new_password.type=='text'){new_password.type='password';current_password.type='password';new_password_confirmation.type='password';document.getElementById('show').innerHTML = 'Show';}else{new_password.type='text';current_password.type='text';new_password_confirmation.type='text';document.getElementById('show').innerHTML='Hide';}">Show</button>
  <br><br>

	
    <div class="form-group">
    <div class="row">	
      <div class="col-sm-3" style="margin-left:100px;">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
	   <div class="col-sm-3">
        <a href="{{route('dashboard',['username'=>Auth::user()->username])}}"" style="text-decoration:none;"> back to home</a>
      </div>
	  </div>
    </div>
  </form>
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