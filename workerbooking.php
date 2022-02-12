<!DOCTYPE html>

<html lang="en">
 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback Form Using HTML, CSS And PHP - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <link rel="stylesheet" href="customer/feedback/form.css" >

        <script src="form.js"></script>
      <style>

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 253px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

</style> 
    </head>
    
    <body>
	
        <div class="container">
		
                       <div class="imagebg"></div>

            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
				<div id="navbar">
  <a class="active" href="index.php">SERVIX</a>
  

</div>
<div>
                    <h2><center>Bokkings</center></h2> 
                    <p><center> Please book your workers below: </center></p>
                    <form role="form" method="post" id="reused_form">
</div>

<div>

</div>
<div>

</div>

<div>

</div>

<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="wrkrid"> Worker Id:</label>
                                <input type="text" class="form-control" id="workerid" name="workerid" required>
                            </div>
</div>
<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="dte"> Date:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
</div>
<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="durat"> Duration:</label>
                                <input type="time" class="form-control" id="duration" name="duration" required>
                            </div>
</div>

<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="sala"> Salary:</label>
                                <input type="text" class="form-control" id="salary" name="salary" required>
                            </div>
</div>
<div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" >Book now </button>
                            </div>
</body>
<?php

include( "database.php" );
if(isset($_POST['workerid']))
{
$wid=$_POST['workerid'];
$dat=$_POST['date'];
$dur=$_POST['duration'];
$sal=$_POST['salary'];
$sql="insert into workerbooking values('$wid','$dat','$dur','$sal')";

mysqli_query( $connect, $sql );
}

?>
</html>