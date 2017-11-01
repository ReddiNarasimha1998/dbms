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
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if ((((x[2]=='C'&&x[3]=='O')||(x[2]=='M'&&x[3]=='N')||(x[2]=='I'&&x[3]=='T')||(x[2]=='M'&&x[3]=='E')||(x[2]=='M'&&x[3]=='T')||(x[2]=='E'&&x[3]=='C')||(x[2]=='E'&&x[3]=='E'))||
  ((x[2]=='c'&&x[3]=='o')||(x[2]=='m'&&x[3]=='n')||(x[2]=='i'&&x[3]=='t')||(x[2]=='m'&&x[3]=='e')||(x[2]=='m'&&x[3]=='t')||(x[2]=='e'&&x[3]=='c')||(x[2]=='e'&&x[3]=='e'))||
  ((x[2]=='C'&&x[3]=='o')||(x[2]=='M'&&x[3]=='n')||(x[2]=='I'&&x[3]=='t')||(x[2]=='M'&&x[3]=='e')||(x[2]=='M'&&x[3]=='t')||(x[2]=='E'&&x[3]=='c')||(x[2]=='E'&&x[3]=='e'))||
  ((x[2]=='c'&&x[3]=='O')||(x[2]=='m'&&x[3]=='N')||(x[2]=='i'&&x[3]=='T')||(x[2]=='m'&&x[3]=='E')||(x[2]=='m'&&x[3]=='T')||(x[2]=='e'&&x[3]=='C')||(x[2]=='e'&&x[3]=='E')))&&(x[0]==1)&&((x[1]==4)||(x[1]==5)||(x[1]==6)||(x[1]==7))&&(x[4]>=0)&&(x[5]>=0)&&(x[6]>0)) {
      return true;
    } else {
        alert("invalid rollnumber");
        return false;
    }
}
</script>

</head>
<body style=" padding: 1em;font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size: 15px;color: #b9b9b9;background-color: #e3e3e3;">

<div class="container" style="max-width: 38em;padding: 1em 3em 2em 3em;margin: 0em auto;background-color: #fff;border-radius: 4.2px;box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);">
  <h2 style="color:#7ed321">ADD STUDENT</h2><br>
  <form class="form-horizontal" action="/adduser/"  onsubmit="return myFunction()" method="post">
    {{csrf_field()}}
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:#7ed321">Roll Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="numb" placeholder="RollNumber" name="rollnumber" required>
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:#7ed321">Username:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter Username" name="username" required>
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:#7ed321">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
    </div><br>

       <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:#7ed321">Retype Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Retype password" name="password_confirmation" required>
      </div>
    </div><br>
    
	
	<button  style="margin-left:83px;" type="button" style="margin-left:30px;" class="btn btn-default" id ="show" onclick="if(password.type=='text'){password.type='password';password_confirmation.type='password';document.getElementById('show').innerHTML = 'Show';}else{password.type='text';password_confirmation.type='text';document.getElementById('show').innerHTML='Hide';}">Show</button>
	<br><br>
	
    <div class="form-group">
    <div class="row">	
      <div class="col-sm-3" style="margin-left:100px;">
        <button type="submit" class="btn btn-default">Register</button>
      </div>
	   <div class="col-sm-3">
        <a href="{{route('dashboard2',['username'=>Auth::user()->username])}}" style="text-decoration:none;"> back to home</a>
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