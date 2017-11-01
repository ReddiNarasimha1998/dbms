
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
  <div class="container" style="width:50%;backgound-color:yellow;float:left;border-right:1px solid black;">
<h3 style="text-align:center;">HOSTEL</h3>
<div class="container" style="width:100%;">
<div class="panel panel-default">
    <div class="panel-heading">ID<span style="margin-left:55px;">CREATED AT</span></div>
  </div>
  </div>

        @foreach($complaints as $complaint)

        <div class="container" style="width:100%;margin-top:0px;">
  <div class="panel-group">
    <div class="panel panel-primary">
     <div class="panel-heading" style="height:50px;">{{$complaint->id}}<span style="margin-left:30px;">{{$complaint->created_at}}</span><button type="button" class="btn btn-primary" style="float:right;margin-top:0px;" onclick="myfunction({{$complaint->reference_no}})">VIEW</button></div>
     
    
      <div class="panel-body" " id="cmp{{$complaint->reference_no}}" style="display:none" >
        <script>
 
  function myfunction(y)
  {//document.write(y);

 
@foreach($complaints as $complaint )
  if(y==={{$complaint->reference_no}})
  { var x = document.getElementById("cmp{{$complaint->reference_no}}");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }   
        document.getElementById("cmp{{$complaint->reference_no}}").innerHTML="<ul><li>Rollnumber: {{$complaint->rollnumber}}</li><li>Complaint_referencenumber: {{$complaint->reference_no}}</li><li>Complaint_type: {{$complaint->type}}</li><li>Description: {{$complaint->description}}</li><li> current_status:{{$complaint->status}}</li></ul>";
    }
    @endforeach
      
        
      
 
  }
  </script>


    </div>
   
    </div>
  </div>
</div>
 @endforeach
</div>
<div class="container" style="width:50%;backgound-color:yellow;float:right;border-right:1px solid black;">
<h3 style="text-align:center;">ACADEMICS</h3>
<div class="container" style="width:100%;">
<div class="panel panel-default">
    <div class="panel-heading">ID<span style="margin-left:55px;">CREATED AT</span></div>
  </div>
  </div>
   @foreach($acomplaints as $acomplaint)

        <div class="container" style="width:100%; float:right;margin-top:0px;">
  <div class="panel-group">
    <div class="panel panel-primary">
     <div class="panel-heading" style="height:50px;">{{$acomplaint->id}}<span style="margin-left:30px;">{{$acomplaint->created_at}}</span><button type="button" class="btn btn-primary" style="float:right;margin-top:0px;" onclick="myfunction1({{$acomplaint->reference_no}})">VIEW</button></div>
     
    
      <div class="panel-body" " id="cmp{{$acomplaint->reference_no}}" style="display:none" >
        <script>
 
  function myfunction1(y)
  {//document.write(y);

 
@foreach($acomplaints as $acomplaint )
  if(y==={{$acomplaint->reference_no}})
  { var x = document.getElementById("cmp{{$acomplaint->reference_no}}");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }     
        document.getElementById("cmp{{$acomplaint->reference_no}}").innerHTML="<ul><li>Rollnumber: {{$acomplaint->rollnumber}}</li><li>Complaint_referencenumber: {{$acomplaint->reference_no}}</li><li>Complaint_type: {{$acomplaint->type}}</li><li>course_issues: {{$acomplaint->course}}</li><li>Description: {{$acomplaint->description}}</li><li> current_status:{{$acomplaint->status}}</li></ul>";
       
       

    }
    @endforeach
        
      
 
  }
  </script>


    </div>
   
    </div>
  </div>
</div>
 @endforeach
</div>
</body>
</html>
