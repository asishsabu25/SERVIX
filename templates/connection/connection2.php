
************MYSQL CONNECTION()******

<div class="container" style="max-width: 1200px;">
	<div class="row">
<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];

$state=$_POST['state'];
$aadharno=$_POST['aadharno'];
$job=$_POST['job'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$pass=$_POST['pass'];

$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
	die('connection failed: '.$conn->connect_error);

}
else{
	$stmt = $conn->prepare("INSERT INTO `registration`(`Firstname`, `Lastname`, `Gender`, `State`,`Email`, `Aadharno`, `Job`, `Mobile`, `Address`, `District`, `Pincode`, `Password`)values(?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssississss",$firstname,$lastname,$gender,$state,$email,$aadharno,$job,$mobile,$address,$district,$pincode,$pass);
	
    $stmt->execute();
          echo "worker registration successfully..";
	$stmt->close();
	$conn->close();

}






?>


