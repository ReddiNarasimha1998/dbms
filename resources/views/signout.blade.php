<!DOCTYPE html>
<html>
<head>
<title>signout</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container-fluid" >
 <nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <p class="navbar-brand" href="#"style="margin-left:20px;color:white">COMPLAINT BOX</p>
    </div>
    <ul class="nav navbar-nav navbar-left">
	<li ><a href="{{route('login')}}" style="color:white;"><span class="glyphicon glyphicon-home" style="color:white;"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>

<div class="container" style="background-color:#00FF7F;border-radius:20px;">
<h2>you are successfully logged out!!</h2>
</div><br>
<p style="margin-left:150px;"> To login click on the <strong>login</strong> button</p>

</body>
</html>