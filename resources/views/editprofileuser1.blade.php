<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style=" padding: 1em;font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size: 15px;color: #b9b9b9;background-color: #e3e3e3;">

<div class="container" style="max-width: 60em;padding: 1em 3em 2em 3em;margin: 0em auto;background-color: #fff;border-radius: 4.2px;box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);">
  <h2 style="color:#7ed321;text-align:center;">EDIT PROFILE</h2><br>
  
  
  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="container">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="australia-sydney.jpg" alt="Lights" style="width:200px;height:200px;margin-left:20px;" class="img-circle">
        </a>
      </div>
    </div>
    <div class="col-md-4">
	<br><br>
     <h2 style="color:#7ed321">HI USER!</h2>
    </div>
  </div>
</div> <br>
  
  
  
  
  
  
  
  
  <form class="form-horizontal" action="/editprofileuser/" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="firstname" style="color:#7ed321">FIRST NAME:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" value="{{$student->firstname}}" style="width:50%;">
      </div>
    </div><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="middlename" style="color:#7ed321">MIDDLE NAME:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="middlename" placeholder="Middle Name" name="middlename" value="{{$student->middlename}}" style="width:50%;">
      </div>
    </div><br>
       <div class="form-group">
      <label class="control-label col-sm-2" for="lastname" style="color:#7ed321">LAST NAME:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" value="{{$student->lastname}}" style="width:50%;">
      </div>
    </div><br>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="gender" style="color:#7ed321">GENDER:</label>
      <div class="col-sm-10">          
        <label style="margin-left:30px;color:#7ed321;"><input type="radio" name="gender" value='false'-> Male</label>
		<label style="margin-left:30px;color:#7ed321;"><input type="radio" name="gender" value='true'> Female</label>
      </div>
    </div><br>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="rollnumber" style="color:#7ed321">ROLL NUMBER:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="rollnumber" placeholder="Roll Number" name="rollnumber" value="{{$student->roll_number}}" style="width:50%;">
      </div>
    </div><br>
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="department" style="color:#7ed321">DEPARTMENT:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="department" placeholder="Department" name="department"  value="{{$student->department}}" style="width:50%;">
      </div>
    </div><br>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="hostel" style="color:#7ed321">HOSTEL:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="hostel" placeholder="Hostel" name="hostel" value="{{$student->hostel}}" style="width:50%;">
      </div>
    </div><br>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="roomno" style="color:#7ed321">ROOM NO:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="roomno" placeholder="Room No" name="roomno" value="{{$student->roomnumber}}" style="width:50%;">
      </div>
    </div><br>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="messno" style="color:#7ed321">MESS NO:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="messno" placeholder="Mess No" name="messno" value="{{$student->messrollno}}" style="width:50%;">
      </div>
    </div><br>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="messblock" style="color:#7ed321">MESS BLOCK:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="messblock" placeholder="messblock" name="messblock" value="{{$student->mess_block}}" style="width:50%;">
      </div>
    </div><br>
	
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:#7ed321">EMAIL:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$student->email}}" style="width:50%;">
      </div>
    </div><br>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="mobile" style="color:#7ed321">MOBILE:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile" value="{{$student->phone_number}}" style="width:50%;">
      </div>
    </div><br>
	
    <div class="form-group">
<div class="row">	
      <div class="col-sm-3" style="margin-left:100px;">
        <button type="submit" class="btn btn-primary"> Save </button>
      </div>
	   <div class="col-sm-3">
        <a href="{{route('dashboard',['id'=>Auth::user()->username])}}" style="text-decoration:none;"> back to home</a>
      </div>
	  </div>
    </div>
  </form>
</div>

</body>
</html>