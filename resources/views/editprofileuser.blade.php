
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
    if(!x){return true;}
    else if(((x[0]=='A')||(x[0]==0)||(x[0]=='B')||(x[0]=='C')||(x[0]=='D')||(x[0]=='a')||(x[0]=='b')||(x[0]=='c')||(x[0]=='d'))&&(x[1]>=0)&&(x[2]>=0)&&(x[3]>0)) 
  {
     return true;
    }
  else 
  {
  alert("invalid room no");
  return false;
    }
}</script>

</head>
<body>
<div>
<div style="float:left;">
<div class="jumbotron" style="text-align:center;height:50px;color:white;background-color:black;opacity:0px;margin-bottom:0px;width:1150px;">
<h2 style="margin-top:0px;">User Profile</h2>
</div>

<nav class="navbar navbar-inverse" style="border-radius:0px;height:63px;">
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
<a href="{{route('profilepic')}}"><img src="/uploads/avatars/{{ Auth::user()->image }}" width="165" height="159"></a>
</div>
</div>
<div class="container" style="background-color: #fff;float:left;">
  
  <form class="form-horizontal" action="/editprofileuser/" onsubmit="return myFunction()" method="post">
    {{csrf_field()}}
  
    <div class="form-group">
      <div class="col-sm-4">
    <label for="firstname" style="color:#7ed321">FIRST NAME:</label>
    <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname"  value="{{$student->firstname}}" style="width:50%;">
      </div>
    <div class="col-sm-4"> 
        <label  for="middlename" style="color:#7ed321">MIDDLE NAME:</label>   
        <input type="text" class="form-control" id="middlename" placeholder="Middle Name" name="middlename" value="{{$student->middlename}}" style="width:50%;">
      </div>
     <div class="col-sm-4">          
    <label  for="lastname" style="color:#7ed321">LAST NAME:</label>
        <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" value="{{$student->lastname}}" style="width:50%;">
      </div>
    </div><br>
    <div class="form-group">
    <div class="col-sm-4">
        <label for="gender" style="color:#7ed321">GENDER:</label>   
        <label style="margin-left:30px;color:#7ed321;"><input type="radio" name="gender"  required value="male" {{$student->gender == 'male' ? 'checked' : '' }}> Male</label>
    <label style="margin-left:30px;color:#7ed321;"><input type="radio" name="gender" required ng-model='mValue' value="female" {{$student->gender == 'female' ? 'checked' : '' }}> Female</label>
      </div>
      
    <div class="col-sm-4">
      <fieldset disabled="disabled">
        <label for="rollnumber" style="color:#7ed321">ROLL NUMBER:</label>    
        <input type="text" class="form-control" id="rollnumber" placeholder="Roll Number" name="rollnumber" required  value="{{$student->roll_number}}" style="width:50%;">
        </fieldset>
      </div>
    
     <div class="col-sm-4">  <fieldset disabled="disabled">  
       <label for="department" style="color:#7ed321">DEPARTMENT:</label>    
        <input type="text" class="form-control" id="department" placeholder="Department" name="department"  value="{{$dep->deptname}}" style="width:50%;"></fieldset>
      </div>
    </div><br>
    <div class="form-group">
     <div class="col-sm-4">          
    <label for="hostel" style="color:#7ed321">HOSTEL:</label>
        <input type="text" class="form-control" id="hostel" placeholder="Hostel" name="hostel" value="{{$student->hostel}}" style="width:50%;">
      </div>
    <div class="col-sm-4">   
         <label for="roomno" style="color:#7ed321">ROOM NO:</label>   
        <input type="text" class="form-control" id="numb" title="if not megatower enter first digit 0" placeholder="Room No" name="roomno" value="{{$student->roomnumber}}"style="width:50%;">
      </div>
    <div class="col-sm-4">      
        <label for="messno" style="color:#7ed321">MESS NO:</label>    
        <input type="text" class="form-control" id="messno" placeholder="Mess No" name="messno" value="{{$student->messrollno}}" style="width:50%;">
      </div></div><br>
    <div class="form-group">
    <div class="col-sm-4">    
        <label for="messblock" style="color:#7ed321">MESS BLOCK:</label>      
        <input type="text" class="form-control" id="messblock" placeholder="messblock" name="messblock" value="{{$student->mess_block}}" style="width:50%;">
      </div>
      
     <div class="col-sm-4">
     <fieldset disabled="disabled">          
    <label for="email" style="color:#7ed321">EMAIL:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$student->email}}" style="width:50%;">
        </fieldset>
      </div>
    
     <div class="col-sm-4">          
    <label for="mobile" style="color:#7ed321">MOBILE:</label>
        <input type="text" class="form-control" id="mobile" placeholder="Mobile"  pattern="[1-9]{1}[0-9]{9}" name="mobile" value="{{$student->phone_number}}" style="width:50%;">
      </div>
    </div><br>
   
  
    <div class="form-group">
<div class="row"> 
      <div class="col-sm-3" style="margin-left:100px;">
        <button type="submit" class="btn btn-primary"  >Save</button>
      </div>
     <div class="col-sm-3">
        <a href="{{route('dashboard',['id'=>Auth::user()->username])}}" style="text-decoration:none;"> back to home</a>
      </div>
    </div>
    </div>
  </form>
    
</div> 
<div style="float:left;">
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
</div>
 </body>
  
</html>