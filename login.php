<?php
session_start();

?>
<?php
$x = $_POST[ "sid" ];
$y = $_POST[ "pass" ];

include( "database.php" );
$sql = "select * from login where eid='$x ' and pass='$y'";

$result = mysqli_query( $connect, $sql );

//echo "$x";
//echo "$y";

if ( $result->num_rows > 0 )
{
   // echo "$x";
//echo "$y";
    
    $_SESSION["eid"]=$x;
    
    
	if ( $row = $result->fetch_assoc() ) 
    
    {
        	//$_SESSION[ "fname" ] = $row[ "name" ];
          
        if ( $row["role"] == "user")
            

            header( 'Location:STUDENT/student/home.php' );
            #header( 'Location:test.php' );
            
            else if ($row["role"]=="admin")
        	   header('Location:ADMIN/admin/index.php');
            
        else if ($row["role"]=="faculty")
        	   header('Location:FACULTY/faculty/facultyindex.php');
        
       
         
}
    


        }
else {
	//error message if SQL query fails
	echo "<h3><span style='color:red; '>Invalid User ID & Password. Page Will redirect to Login Page after 3 seconds </span></h3>";
	header( "refresh:3;url=studentlogin.php" );
}
  $connect->close();  

?>
<?php include('allfoot.php'); ?>



