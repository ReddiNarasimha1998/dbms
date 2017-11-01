
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
<body>
<div>
<div style="float:left;">
<div class="jumbotron" style="text-align:center;height:50px;color:white;background-color:black;opacity:0px;margin-bottom:0px;width:1201px;">
<h2 style="margin-top:0px;">User Profile</h2>
</div>

<nav class="navbar navbar-inverse" style="border-radius:0px;height:63px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"style="margin-left:20px;color:white">COMPLAINT BOX</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
 <li ><a href="{{route('dashboard2',['username'=>Auth::user()->username])}}"><span class="glyphicon glyphicon-home"></span>Home</a></li>
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
  
   <form class="form-horizontal" action="/adminprofile/" method="post">
    {{csrf_field()}}
    <div>
      <fieldset disabled="disabled">
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
       <label for="rollnumber" style="color:#7ed321">GENDER:</label>   
        <input type="text" class="form-control" id="gender" placeholder="GENDER" name="gender"  value="{{$student->gender}}" style="width:50%;">
      </div>
      
    <div class="col-sm-4">
        <label for="rollnumber" style="color:#7ed321">FACULTY ID:</label>   
        <input type="text" class="form-control" id="rollnumber" placeholder="Roll Number" name="rollnumber" required  value="{{$student->roll_number}}" style="width:50%;">
      </div>
    
      <div class="col-sm-4">         
    <label for="email" style="color:#7ed321">EMAIL:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$student->email}}" style="width:50%;">
      </div>
    
    </div><br>
    
    <div class="form-group">
      
    
     <div class="col-sm-4">          
    <label for="mobile" style="color:#7ed321">MOBILE:</label>
        <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile" value="{{$student->phone_number}}" style="width:50%;">
      </div>
    </div><br>
    </fieldset>
  </div>
   
  
    <div class="form-group">
<div class="row"> 
      <div class="col-sm-3" style="margin-left:100px;">
       <a href="{{route('editadminprofile')}}" style="text-decoration:none;"> EDIT</a>
      </div>
     <div class="col-sm-3">
        <a href="{{route('dashboard',['id'=>Auth::user()->username])}}" style="text-decoration:none;"> back to home</a>
      </div>
    </div>
    </div>
  </form>
    
</div> 
 </body>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
</html>