
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
  <script>
  function mysearch1()
  {
  var x = document.getElementById("search1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }
  </script>

  <script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#demo").hide();
    });
    $("#show").click(function(){
        $("#demo").show();
    });
});
</script>
 <script>
  function mysearch()
  {
  var x = document.getElementById("search");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }
  </script>
  <script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;
    if(!x){
      return true;
    }

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
  <li ><a href="{{route('dashboard2',['username'=>Auth::user()->username])}}"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="{{route('profileadmin')}}"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
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
  Welcome<span style="margin-left:20px;">{{Auth::user()->username}}-----     @if(session()->has('message'))
    <div class="alert alert-success" style="text-align:center;float:left;">
        {{ session()->get('message') }}
    </div>
@endif<span>
</div><br>
<div class="container" style="background-color:#ccccff; border-radius:10px;">
<br>
<a href="{{route('adduser')}}">click here to add user</a>
<br><a href="{{route('addadmin')}}">click here to add admin</a>
<br><a href="{{route('posthosteladmin')}}">click here to have a look at all the <strong>complaints</strong></a>
<br><a href="{{route('feedbackadmin')}}">click here to have a look at all the <strong>Feedbacks</strong></a>
<br><input type="checkbox" onclick="mysearch();"> <strong style="margin-left:5px;"><a style="text-decoration: none;">  check for the student complaints</a><strong><br>
<div style="margin-left:15px;display:none" id="search">
<form action="\viewstudentcomplaint" method="post" onsubmit="return myFunction()">
  {{csrf_field()}}
<label>Student ID:</label><input type="text" name="student" id="numb" required><button type="submit">submit</button><br>
</form>
</div>
<input type="checkbox" onclick="mysearch1();"> <strong style="margin-left:5px;"> <a style="text-decoration: none;">update the status of complaint</a><strong><br>
<div style="margin-left:15px;display:none" id="search1">
<form action="/updatestatus" method="post" onsubmit="return myFunction()">
  {{csrf_field()}}
<label>Student ID:</label><input type="text"  id="numb"name="rollnumber" required><br>
<input type="radio" name="complaint" value="hostel" required > HOSTEL</span><br>
<input type="radio" name="complaint" value="academics" required >ACADEMICS</span><br>
<label>ref ID:</label><input type="text" name="reference" required><br>
<label>status:</label><input type="text" name="status" required ><br>
<button type="submit" >submit</button><br>
</form>

<br><br></div>

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
@endif
</br></html>