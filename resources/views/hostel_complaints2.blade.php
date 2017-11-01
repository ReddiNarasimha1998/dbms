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

<div class="container" style="max-width: 40em;padding: 1em 3em 2em 3em;margin: 0em auto;background-color: #fff;border-radius: 4.2px;box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);">
  <h2 style="color:red;text-align:center;">HOSTEL COMPLAINT</h2><br>
  
  
  <form class="form-horizontal" action="/hostelcomplaint/" method ='post'>
    {{csrf_field()}}
	<div class="form-group">
      <label class="control-label col-sm-2" for="gender" style="color:red">COMPLAINT:</label>          
        <label style="margin-left:30px;color:red;"><input type="checkbox" name="complaint" value='1'> WATER SUPPLY </label><br>
		<label style="margin-left:30px;color:red;"><input type="checkbox" name="complaint" value='2'> FURNITURE </label><br>
		<label style="margin-left:30px;color:red;"><input type="checkbox" name="complaint" value='3' style="margin-left:90px;"> ELECRICITY </label><br>
		<label style="margin-left:30px;color:red;"><input type="checkbox" name="complaint"  value='4' style="margin-left:90px;"> MESS</label>
    </div><br>
	
	<div class="form-group">
	<textarea rows="4" cols="50" style="margin-left:90px;color:black;" ></textarea>
	</div>
	
    <div class="form-group">
    <div class="row">	
      <div class="col-sm-3" style="margin-left:100px;">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
	   <div class="col-sm-3">
        <a href="{{route('dashboard',['username'=>Auth::user()->username])}}" style="text-decoration:none;"> back to home</a>
      </div>
	  </div>
    </div>
  </form>
</div>

</body>
</html>