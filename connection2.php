<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];

$country=$_POST['country'];
$aadharno=$_POST['aadharno'];
$job=$_POST['job'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
	die('connection failed: '.$conn->connect_error);

}
else{
	$stmt = $conn->prepare("insert into registration(firstname,lastname,gender,country,aadharno,job,email,mobile,address,district,pincode,password,confirmpassword)values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssissississ",$firstname,$lastname,$gender,$country,$aadharno,$job,$email,$mobile,$address,$district,$pincode,$password,$confirmpassword);
	$stmt->execute();

	echo "registration successfully..";
	$stmt->close();
	$conn->close();
}


?>