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

<script type="text/javascript">
$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});

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
	<li ><a href="{{route('dashboard',['username'=>Auth::user()->username])}}"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="{{route('profile')}}"><span class="glyphicon glyphicon-user}}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
	  <li><a href="{{route('changepassword')}}"><span class="glyphicon glyphicon-lock"></span>Change Password</a></li>
      <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a></li>
    </ul>
  </div>
</nav>
</div>
<div style="float:left;">
  <a href="{{route('profilepic')}}"><img src="/uploads/avatars/{{ Auth::user()->image }}" width="165px" height="148px"></a>
</div>
<br>

<div class="container" style="max-width:60em;margin: 0em auto;background-color: #fff;border-radius: 4.2px;box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);">
  <div style="margin-left:300px;">
  <form class="form-horizontal" action="/hostelcomplaint/" method ="post">
    {{csrf_field()}}
    <div class="form-group">
	  <div class="col-sm-4" required>
      <label for="gender" style="color:#7ed321">COMPLAINT:</label> <br>         
        <label style="margin-left:30px;color:#7ed321;"><input type="checkbox" name="complaint[]"  value="water_supply"> WATER SUPPLY </label><br>
    <label style="margin-left:30px;color:#7ed321;"><input type="checkbox" name="complaint[]" value="furniture"> FURNITURE </label><br>
    <label style="margin-left:30px;color:#7ed321;"><input type="checkbox" name="complaint[]"  value="electricity"> ELECRICITY </label><br>
    <label style="margin-left:30px;color:#7ed321;"><input type="checkbox" name="complaint[]"  value="mess"> MESS</label>
    </div></div>
	
	 <div class="form-group">
	 <div >
	  <button type="button" class="btn btn-default" onclick="myfunction()">Click here to give description on the complaint</button>
	  </div><br>
	  <div id="textarea" name="description" style="display:none;">
	<textarea rows="4" cols="50"  name="description" style="margin-left:45px;color:black;" ></textarea>
	</div>
	<br>
	 <div class="col-sm-4">
        <button type="submit" class="btn btn-default" value="Test Required" id="checkBtn" style="margin-left:30px;">Submit</button><br><br>
        <a href="{{route('dashboard',['username'=>Auth::user()->username])}}" style="text-decoration:none;margin-left:30px;">BACK TO HOME</a>
      </div>
	</div>
  </form></div>
</div>
	

</body>
</html>