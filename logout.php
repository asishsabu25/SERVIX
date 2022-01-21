<?php
session_start();
include('database.php');
$userfname = $_SESSION[ "fname" ];
$userlname=$_SESSION["lname"];
//$sql="update login set status=0 where username='$u'";
//mysqli_query($conn,$sql);
session_destroy();
header('Location:index.php');   

?>