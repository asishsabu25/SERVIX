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
<center><h1> BOOKING DETAILS </h1></center>
<table>
<tr>
<th>BOOKING ID</th>
<th>WORKER ID</th>
<th>DATE</th>
<th>DURATION</th>
<th>SALARY</th>
</tr>

</div>
<div>
<?php
include("database.php");
$sql="select * from workerbooking";
$tbl=mysqli_query( $connect, $sql );;
while($row = mysqli_fetch_array($tbl))

  {

echo "<tr>";
echo "<td>" . $row['bookingid'] . "</td>";
echo "<td>" . $row['workerid'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['duration'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";



  //echo ."	".."	".$row['Last Name']."	".."	".."	".;

  echo "</tr>";

}echo "</table>";
//echo"";
?>

</div>
</body>
</html>