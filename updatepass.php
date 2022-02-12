<?php session_start();
include( "database.php" );
$uname=$_SESSION['user_id'];	
?>
<style>
.header {
  background-color: #f1f1f1;
  padding: 15px;
  text-align: center;
}
#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 112px;
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


input[type=text] {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #008CBA;
    color: white;
	border-radius: 12px;
}
input[type=text]:hover {
    background-color: #00F;
}
input[type=password] {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #008CBA;
    color: white;
	border-radius: 12px;
}
input[type=password]:hover {
    background-color: #008CBA;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
	border-radius: 12px;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}
</style>

<script src="../shares/maha.js"></script>
<body background="" style=" background-repeat:no-repeat; background-size:cover;">



<?php
    $sql="select password from customerregistration where email='$email'";
    $tbls=getDatas($sql);
	$n=$tbls[0][0];
    ?>

<div class="header">
  <center><h2>PASSWORD UPDATION</h2></center>
</div>

<div id="navbar">
  <a class="active" href="index.php">HOME</a>
  <a href="../common/logout.php">LOGOUT</a>
 
</div>
<br>

<center>
<form method="post" class="frm">
<table cellpadding="6" cellspacing="10">
<tr>
<td><B><font color="#FFFFFF">Current password</font></b></td>
<td><input type="password"  name="pass"  required="required" ></td>
</tr>
<tr>
<td><B><font color="#FFFFFF">New password</font></b></td>
<td><input type="password"  name="passwords" id="pwd" onblur="return verifyPwd(this,'err')" required="required"  ></td></tr>
<tr>
<td><B><font color="#FFFFFF">Confirm New password</font></b></td>
<td><input type="password" id="cpwd"  onblur="return confirmPwd('pwd','cpwd','err')" required="required" ></td>
</tr>

<tr>
<td colspan="2" align="center">
<button class="button button2" type="submit" name="submit">Submit</button>
</td>
</tr>
</table>
</form>
</center>
</body>
<?php
include( "database.php" );
if(isset($_POST['passwords']))
{
$newpassword=$_POST['passwords'];
$old=$_POST['pass'];
if($n==$old)
{
$sql="update login set password='$newpassword' where username='$uname'";
setDatas($sql);
$sql="update customerregistration set password='$newpassword' where email='$uname'";
setDatas($sql);
//nextpage('../common/index.php');
}
else
{
?>
<script>alert("incorrect password");</script>
<?php
}
}
?>