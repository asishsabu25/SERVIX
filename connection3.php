<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];

$state=$_POST['state'];

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
	$stmt = $conn->prepare("INSERT INTO `user`(`Firstname`, `Lastname`, `Gender`, `State`, `Email`, `Mobile`, `address`, `District`, `Pincode`, `Password`)values(?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssissis",$firstname,$lastname,$gender,$state,$email,$mobile,$address,$district,$pincode,$pass);
	
    $stmt->execute();
        echo "register sucessfully...";
	$stmt->close();
	$conn->close();

       
    

}


?>
