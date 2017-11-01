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
	<div style="text-align:center;">
		<br>
Hello,{{Auth::user()->rollnumber}}<br><br>
Your Complaint has been submitted,Here are details of the complaint
 </div><br>
 <div class="container" style="width:50%;margin-top:0px;">
  <div class="panel-group">
    <div class="panel panel-primary">
     <div class="panel-heading" style="height:50px;">COMPLAINT DETAILS</div>
      <div class="panel-body" id="cmp"  >
<ul>
<li>
	Complaint_referencenumber: {{$complaint->reference_no}}
</li>
<li>
	Complaint_type: {{$complaint->type}}
</li>
<li>
	Description: {{$complaint->description}}
</li>
<li>
	current_status:{{$complaint->status}}
</li>
</ul>
</div>
</div>
</div>
</div>
 <div class="col-sm-4" style="margin-left:500px;">
         <a href="{{route('dashboard',['username'=>Auth::user()->username])}}" style="text-decoration:none;"> back to home</a>
      </div>
</body>
</html>