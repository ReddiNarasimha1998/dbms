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
<body >
<div style="float:left">
<form>
<label style="font-size:30px;color:#7ed321">FILTER:</label><br>
<input type="radio" name="com" onclick="myall()" checked><span style="font-size:20px;"> ALL</span><br>
<input type="radio" name="com" onclick="myhostel()"><span style="font-size:20px;"> HOSTEL</span><br>
<input type="radio" name="com" onclick="myaca()" ><span style="font-size:20px;"> ACADEMICS</span><br>
</form>
</div>
<script>
function myall()
{
 var x = document.getElementById("all");
 var y = document.getElementById("hostel");
 var z = document.getElementById("academics");
    if (x.style.display === "none") 
       { 
	   x.style.display = "block";
	   y.style.display = "none";
	   z.style.display = "none";
    } 
}
</script>
<script>
function myhostel()
{
 var x = document.getElementById("all");
 var y = document.getElementById("hostel");
 var z = document.getElementById("academics");
    if (y.style.display === "none") 
       { 
	   x.style.display = "none";
	   y.style.display = "block";
	   z.style.display = "none";
    } 
}
</script>
<script>
function myaca()
{
 var x = document.getElementById("all");
 var y = document.getElementById("hostel");
 var z = document.getElementById("academics");
    if (z.style.display === "none") 
       { 
	   x.style.display = "none";
	   y.style.display = "none";
	   z.style.display = "block";
    } 
}
</script>
<div style="float:left;border-left:1px solid black;margin-left:40px;">

<div id="all">
  <h3 style="text-align:center;">ALL FEEDBACKS</h3>
@foreach($feedbacks as $feedback)

<div class="container">
  <div class="panel panel-default">
    <div class="panel-body" style="box-shadow:2px 2px;">
      <ul>
       <li> type: {{$feedback->type}}</li>
       <li>Description:{{$feedback->description}}</li>
     </ul>
      </div>
  </div>
</div>
@endforeach
</div>

<div id="hostel" style="display:none;">
  <h3 style="text-align:center;">HOSTEL FEEDBACKS</h3>
@foreach($feedbacks as $feedback)
@if($feedback->type == "hostel")
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body" style="box-shadow:2px 2px;">{{$feedback->description}}</div>
  </div>
</div>
@endif

@endforeach
</div>

<div id="academics" style="display:none;">
  <h3 style="text-align:center;">ACADEMIC FEEDBACKS</h3>
@foreach($feedbacks as $feedback)
@if($feedback->type == "academics")
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body" style="box-shadow:2px 2px;">
      
       {{$feedback->description}}
      </div>
  </div>
</div>
@endif

@endforeach
</div>

</div>


</body>
</html>