
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
  div.imagetiles div.col-sm-6{
  padding: 0px;}
  body{
  
  }
    </style>
</head>
<body>
<div class="container" style="background-image:url('/images/IMG_165196.jpg');width:100%;height:100%;background-repeat:no-repeat;background-size:100% 100%;">
<br><br>
<div >
  <h1 style="text-align:center;color:#00FFFF">Complaint Box</h1>
<marquee><h2 style="color:#00FFFF">Welcome To The Login Page</h2> </marquee>
</div>
  <div class="container-fluid" style="width:100%;height:100%;padding-right:200px;padding-left:200px;">
  <div class="row imagetiles">
        <div class="col-sm-6">
            <img src='images/photo.jpg' class="img-responsive" style="width:100%;height:317px;border-top-left-radius:20px;border-bottom-left-radius:20px;">
        </div>
		
		<div class="col-sm-6" style="background-color:#A9A9A9;border-top-right-radius:20px;border-bottom-right-radius:20px;">
<h6 style="font-size:17px;margin-left:30px;"><strong>Login </strong></h6>
		<form method="POST" action="/login/">
      {{csrf_field()}}
  <div class="form-group">
    <label for="email" style="margin-left:30px;">User name:</label>
    <input type="email" class="form-control" id="email" name="username" style="width:50%;margin-left:30px;">
  </div>
  <div class="form-group">
    <label for="pwd"style="margin-left:30px;">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" style="width:50%;margin-left:30px;">
  </div>
  <button type="button" style="margin-left:30px;" class="btn btn-default" id ="show" onclick="if(password.type=='text'){password.type='password';document.getElementById('show').innerHTML = 'Show';}else{password.type='text';document.getElementById('show').innerHTML='Hide';}">Show</button>
 <!-- <div class="checkbox">
    <label style="margin-left:30px;"><input type="checkbox" id="remember" name="remember"> Remember me</label>
  </div>-->

  <button type="submit" style="margin-left:40px;" class="btn btn-default">Submit</button>
  <p><a href="" style="font-size:30px;font-family:'Brush Script MT', cursive;margin-left:30px;"> </a>  <a href="" style="font-size:24px;font-family:'Brush Script MT', cursive;"></a></p> 
  
</form>
		
		
		
<p><a href="" style="font-size:24px;font-family:'Brush Script MT', cursive;margin-left:30px;"> </a>  <a href="" style="font-size:24px;font-family:'Brush Script MT', cursive;"></a></p> 
        </div>
    </div>
  </div>
  
  <div class="jumbotron text-center" style="height:138px;background-color:transparent;">
  
  </div>
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

