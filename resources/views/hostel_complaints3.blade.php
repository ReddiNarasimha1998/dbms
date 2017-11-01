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
<div class="jumbotron" style="text-align:center;height:50px;color:white;background-color:black;opacity:0px;margin-bottom:0px;">
<h2 style="margin-top:0px;">User Profile</h2>
</div>

<nav class="navbar navbar-inverse" style="border-radius:0px;">
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

<div class="container-fluid" style="margin:0em auto;background-color: #fff;border-radius: 4.2px;">
  
  <form class="form-horizontal" action="/hostelcomplaint/" method ="post">
    {{csrf_field()}}
    
    <div class="form-group">
       <fieldset disabled="disabled">
      <div class="col-sm-4">
	  <label for="name" style="color:#7ed321">NAME:</label>
	  <input type="text" class="form-control" id="name" placeholder="Name" name="firstname"  value="{{$stud->firstname}}" style="width:50%;">
      </div>
	   <div class="col-sm-4">
        <label for="rollnumber" style="color:#7ed321">ROLL NUMBER:</label>	  
        <input type="text" class="form-control" id="rollnumber" placeholder="Roll Number" name="rollnumber" value="{{$stud->roll_number}}" style="width:50%;">
      </div>
	   <div class="col-sm-4">          
	  <label for="hostel" style="color:#7ed321">HOSTEL:</label>
        <input type="text" class="form-control" id="hostel" placeholder="Hostel" name="hostel" value="{{$stud->hostel}}" style="width:50%;">
      </div>
      <fieldset>
	  </div><br>

 
	  <div class="form-group">
     <fieldset disabled="disabled">
	  <div class="col-sm-4">   
         <label for="roomno" style="color:#7ed321">ROOM NO:</label>	  
        <input type="text" class="form-control" id="roomno" placeholder="Room No" name="roomno" value="{{$stud->roomnumber}}" style="width:50%;">
      </div>
	  <div class="col-sm-4">      
        <label for="messno" style="color:#7ed321">MESS NO:</label>	  
        <input type="text" class="form-control" id="messno" placeholder="Mess No" name="messno" value="{{$stud->messrollno}}" style="width:50%;">
      </div>
	  <div class="col-sm-4">    
        <label for="messblock" style="color:#7ed321">MESS BLOCK:</label>      
        <input type="text" class="form-control" id="messblock" placeholder="messblock" name="messblock" value="{{$stud->mess_block}}" style="width:50%;">
      </div>
      <fieldset>
	  </div>
     
     
	  <div class="form-group">
      
	   <div class="col-sm-4">          
	  <label for="email" style="color:#7ed321">EMAIL:</label>
       <fieldset disabled="disabled"> <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$stud->email}}" style="width:50%;"><fieldset>
      
      </div>
      
	   <div class="col-sm-4">          
	  <label for="mobile" style="color:#7ed321">MOBILE:</label>
        <fieldset disabled="disabled"><input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile" value="{{$stud->phone_number}}" style="width:50%;"> </fieldset>
      </div>
   
	  <div class="col-sm-4">
      <label for="gender" style="color:#7ed321">COMPLAINT:</label> <br>         
        <label style="margin-left:30px;color:#7ed321;"><input type="checkbox" name="complaint[]" value="water_supply"> WATER SUPPLY </label><br>
		<label style="margin-left:30px;color:#7ed321;"><input type="checkbox" name="complaint[]" value="furniture"> FURNITURE </label><br>
		<label style="margin-left:30px;color:#7ed321;"><input type="checkbox" name="complaint[]" value="electricity"> ELECRICITY </label><br>
		<label style="margin-left:30px;color:#7ed321;"><input type="checkbox" name="complaint[]" value="mess"> MESS</label>
    </div></div>
	
	 <div class="form-group">
	 <div class="col-sm-4">
	  <button type="button" class="btn btn-default" onclick="myfunction()">Click here to give description on the complaint</button>
	  </div>
	  <div class="col-sm-4" id="textarea"  style="display:none;">
	<textarea rows="4" cols="50" name="description" style="margin-left:90px;color:black;" ></textarea>
	</div>
	 <div class="col-sm-4">
        <button type="submit" class="btn btn-primary" style="margin-left:30px;">Submit</button>
         <a href="{{route('dashboard',['username'=>Auth::user()->username])}}" style="text-decoration:none;"> back to home</a>
      </div>
	</div>
  </form>
</div>
	

</body>
</html>