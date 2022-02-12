<html>
<head>
  <title></title>
  <style>
.header {
  background-color: blue;
  padding: 30px;
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
  padding: 14px 16px;
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

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style></head>
<body>

<body background="" style="background-attachment:fixed;"  >
<div class="header">
  <h1>SERVIX</h1>


</div>

<div class="content">
<center><h1> WORKER DETAILS </h1></center>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>State</th>
<!--<th>Aadharno</th>-->
<th>Job</th>
<!--<th>Email </th>-->
<th>Mobile</th>
<th>Address</th>
<th>District</th>
<th>book</th>
</tr>
</div>

<div>
<?php
include("database.php");
$sql="select * from registration";
$tbl=mysqli_query( $connect, $sql );;
while($row = mysqli_fetch_array($tbl))

  {

echo "<tr>";

echo "<td>" . $row['Firstname'] . "</td>";
echo "<td>" . $row['Lastname'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['State'] . "</td>";
//echo "<td>" . $row['Aadharno'] . "</td>";
echo "<td>" . $row['Job'] . "</td>";
//echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Mobile'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['District'] . "</td>";
//echo "<td>" . $row['Pincode'] . "</td>";?>
 <td><a href="workerbooking.php"> Book Now </td>

  <!-- echo ."	".."	".$row['Last Name']."	".."	".."	".; -->

  </tr>
<?php
}echo "</table>";
//echo"";
?>

</div>
</body>
</html>